<?php

namespace Admin\Model;

use Think\Model;

class IndexModel extends Model {

    public $tableName = "user";

    public function getMerchantsHot() {//热门商家
        $s_merchants_hot = S("" . LANG_SET . "_index_merchants_hot");
        if (empty($s_merchants_hot)) {
            $data = array(
                "queryStart" => 0,
                "queryCount" => 8,
                "needCouponCount" => false,
                "startLevel" => 1,
                "endLevel" => 1,
                "misNoCouponMerchant" => false,
                "lang" => LANG_SET
            );
            $merchants = getCodeJson($data, 'getMerchantList');
            $s_merchants_hot = $merchants['merchants'];
            S("" . LANG_SET . "_index_merchants_hot", $s_merchants_hot, 1800);
        }
        return $s_merchants_hot;
    }

    public function getSiteInfo() {
        $getSiteInfo = S("getSiteInfo");
        if (empty($getSiteInfo)) {
            $getSiteInfo = getCodeJson("", 'getSiteInfo');
            S("getSiteInfo", $getSiteInfo, 1800);
        }
        return $getSiteInfo;
    }

    public function getStoresSelected() {//精选商家
        $s_stores_selected = S("" . LANG_SET . "_stores_selected");
        if (empty($s_stores_selected)) {
            $data = array('startLevel' => '1', 'endLevel' => 1, 'queryCount' => '9', 'lang' => LANG_SET);
            $arr = getCodeJson($data, 'getMerchantList');
            $s_stores_selected = $arr['merchants'];
            S("" . LANG_SET . "_stores_selected", $s_stores_selected, 1800);
        }
        return $s_stores_selected;
    }

    public function getAds() {   //获取广告
        $data = array('slugs' => 'home-bbs-hot,home-bbs-notic,home-help,home-foot-help,home-right-faq,home-right-course,home-foot-more,home-sites-links,home-bbs-strategy,home-about-us,home-banner,home-slides,reg_banner,login_banner,home-nav-advertisement,home-banner-advertisement,home-right-zero-advertisement,home-right-one-advertisement,home-right-two-advertisement,
        home-right-three-advertisement,stores-right-zero-advertisement,stores-right-one-advertisement,stores-right-two-advertisement,stores-right-three-advertisement,rm_deals_right1,rm_deals_right2,rm_deals_right3,rm_deals_right4,deals-right-zero-advertisement,deals-right-one-advertisement,deals-right-two-advertisement,deals-right-three-advertisement', 'isOpenInNewPage' => '1', 'lang' => LANG_SET);
        $arr = getCodeJson($data, 'getAdvertiseList');
        $getAds = $arr;
        return $getAds;
    }

    public function getMerchantsCats() {//获取商家分类
        $cats = S("" . LANG_SET . "_index_merchants_cats");
        if (empty($cats)) {
            $data = array(
                "activitySlug" => '',
                "type" => "merchant",
                "needCouponCount" => false,
                "lang" => LANG_SET
            );
            $catsJson = getCodeJson($data, 'getCategroyList');
            $cats = $catsJson[0]['categroys'];
            if (count($cats) != 10) {
                foreach ($cats as $k => $v) {
                    if ($k > 9) {
                        $catOtherIds[] = $v['id'];
                        $catOtherSlugs[] = $v['slug'];
                        unset($cats[$k]);
                    }
                }
                if (count($cats) > 9) {
                    $cats[9]['id'] = !empty($catOtherIds) ? implode(",", $catOtherIds) : "";
                    $cats[9]['name'] = L("other");
                    $cats[9]['slug'] = "other";
                    $cats[9]['slug2'] = !empty($catOtherSlugs) ? implode(",", $catOtherSlugs) : "";
                }
            }
            S("" . LANG_SET . "_index_merchants_cats", $cats, 1800);
        }
        return $cats;
    }

    public function getCatsMerchants($cats) {//获取商家分类对应的商家
        $s_cats = S("" . LANG_SET . "_index_cats_merchants");
        if (empty($s_cats)) {
            foreach ($cats as $k => $v) {
                $s_merchants = S("" . LANG_SET . "_index_merchants_" . $v['slug'] . ""); //获取商品分类对应的商家
                if (empty($s_merchants)) {
                    $data = array(
                        "queryStart" => 0,
                        "queryCount" => 8,
                        "needCouponCount" => false,
                        "startLevel" => 0,
                        "endLevel" => 5,
                        "misNoCouponMerchant" => false,
                        "lang" => LANG_SET,
                        "categoryIds" => $v['id'],
                    );
                    $merchants = getCodeJson($data, 'getMerchantList');
                    $s_merchants = $merchants['merchants'];
                    S("index_merchants_" . $v['slug'] . "", $s_merchants, 1800);
                }
                $cats[$k]['merchants'] = $s_merchants;

                $s_coupons = S("" . LANG_SET . "_index_coupons_" . $v['slug'] . ""); //获取优惠
                if (empty($s_coupons)) {
                    $data2 = array('merchantCategorySlugs' => ($v['slug'] == 'other') ? $v['slug2'] : $v['slug'], 'queryCount' => '4', 'lang' => LANG_SET);
                    $couponsJson = getCodeJson($data2, 'getCouponList');
                    $s_coupons = $couponsJson['coupons'];
                    S("" . LANG_SET . "_index_coupons_" . $v['slug'] . "", $s_coupons, 1800);
                }
                $cats[$k]['coupons'] = $s_coupons;
            }
            $s_cats = $cats;
            S("" . LANG_SET . "_index_cats_merchants", $s_cats, 1800);
        }
        return $s_cats;
    }

    public function getCouponCats() {//获取推荐优惠分类
        $s_recommed_coupon_cats = S("" . LANG_SET . "_index_recommed_coupon_cats");
        if (empty($s_recommed_coupon_cats)) {
            $data = array(
                "activitySlug" => '',
                "type" => "coupon",
                "needCouponCount" => false,
                "lang" => LANG_SET
            );
            $cats = getCodeJson($data, 'getCategroyList');
            $s_recommed_coupon_cats = $cats[0]['categroys'];
            S("" . LANG_SET . "_index_recommed_coupon_cats", $s_recommed_coupon_cats, 1800);
        }
        return $s_recommed_coupon_cats;
    }

    public function getCoupons($cateId) {   //根据Category的Id来获取优惠
       $data = array('categoryId' => $cateId, 'queryCount' => '18', 'lang' => LANG_SET);
        $selectedCoupon = getCodeJson($data, 'getCouponList');
        return $selectedCoupon['coupons'];
    }

    public function getAllCoupons() {   //获取所有优惠
        $s_all_coupons = S("" . LANG_SET . "_index_all_coupons");
        if (empty($s_all_coupons)) {
            $data = array('queryCount' => '18', 'startLevel' => 1, 'endLevel' => 2, 'lang' => LANG_SET);
            $selectedCoupon = getCodeJson($data, 'getCouponList');
            $s_all_coupons = $selectedCoupon['coupons'];
            S("" . LANG_SET . "_index_all_coupons", $s_all_coupons, 1800);
        }
        return $s_all_coupons;
    }

    public function getMerchantsDouble() {
        if (LANG_SET == 'zh') {
            $s_data = S("" . LANG_SET . "_index_merchants_double");
            if (empty($s_data)) {
                $data = array('doubleRate' => 'true', 'queryCount' => '7', 'lang' => LANG_SET);
                $arr = getCodeJson($data, 'getMerchantList');
                $s_data = $arr['merchants'];
                S("" . LANG_SET . "_index_merchants_double", $s_data, 1800);
            }
            return $s_data;
        }
    }

    public function getCouponsHot() {
        $s_data = S("" . LANG_SET . "_index_hot_coupons");
        if (empty($s_data)) {
            $data = array('hotMerchant' => true, 'queryCount' => '4', 'lang' => LANG_SET);
            $couponsJson = getCodeJson($data, 'getCouponList');
            $s_data = $couponsJson['coupons'];
            S("" . LANG_SET . "_index_hot_coupons", $s_data, 1800);
        }
        return $s_data;
    }

    public function getMerchantsMy() {
        $chid_left_my_stores = "rm-home-lmy"; //左侧我的商家 chid
        $data = array('userId' => $_COOKIE['myuid'], 'queryCount' => 7, 'lang' => LANG_SET);
        $arr = getCodeJson($data, 'getBusyMerchantListByUserId');
        $lists = $arr['merchants'];
        $div = "<div class='merchant-list'>
<ul class='clearfix'>";
        foreach ($lists as $k => $v) {
            if ($k < 4) {
                $div .="<li " . getEqual($k, 3, "class='last'") . " >
<p class = 'img'>
<a href = '" . __APP__ . "/stores/" . $v['urlName'] . "' target = '_blank'><img src = '" . $v['logo'] . "' alt = '" . $v['name'] . "' /></a>
</p>
<a class = 'title' href = '" . __APP__ . "/stores/" . $v['urlName'] . "' target = '_blank'>" . $v['displayName'] . "</a>
<p class='rebate'><a href = '" . __APP__ . "/stores/" . $v['urlName'] . "' target = '_blank'>
" . getRebate($v['rateRanged']) . "<strong>" . $v['commission'] . "%</strong> ";
//                if ($v['commission'] != $v['oldRate']) {
//                    $div .= L("rebates_before") . "<del>" . $v['oldRate'] . "%</del>";
//                }
                $div .="</a></p><a class='shopping-btn button' href='javascript:void(0)' onclick=getCouponUrl('" . getCouponUrl($v['rebateUrl'],$chid_left_my_stores,$v['id']) . "')>" . L("shop_directly") . "</a></li>";
            }
        }
        $div .="</ul>
<div class='merchant-more clearfix'>
<a class='more-words' href='http://www.erdangjiade.com/" . LANG_SET . "/user/mylink/' target='_blank'>" . L("more_merchants") . "<span class='more-sign'>&gt;</span></a>";

        foreach ($lists as $k => $v) {
            if ($k >= 4) {
                $div .= "<a href='javascript:void(0)' onclick=getCouponUrl('" . getCouponUrl($v['rebateUrl'],$chid_left_my_stores,$v['id']) . "')>" . $v['displayName'] . "<strong>(" . $v['commission'] . "%)</strong></a>";
            }
        }
        $div .= "</div></div>";
        if(count($lists) >0){
        return $div;
        }
    }

    public function getAdsPics($ads, $slug) {
        if ($ads['adGroups']) {
            $ads_pics = $ads['adGroups'][$slug]['advertises'];
            foreach ($ads_pics as $k => $v) {
                preg_match_all("/<img.*src\s*=\s*[\"|\']?\s*([^>\"\'\s]*)/i", $v['content'], $imgs);
                $ads_pics[$k]['pic'] = $imgs[1][0];
            }
            return $ads_pics;
        }
    }

    public function getExpress() {//热门转运公司
        $s_express = S("index_express");
        if (empty($s_express)) {
            $s_express = getUrlJson("http://zhuanyun.erdangjiade.com/Index/getJsonIndexExpress/num/6");
            S("index_express", $s_express, 1800);
        }
        return $s_express;
    }

}
?>

