<?php

namespace Admin\Model;

use Think\Model;

class StoresModel extends Model {

    public $tableName = "user";

    public function getSites() {//获取各个类别key
        $sites = array(
            "cat_id" => 0,
            "alpha_id" => 1,
            "kind_id" => 2,
            "ord" => 3, //ord 1 返利up 2返利down  3热度up 4热度down
            "feature_id" => 4
        );
        return $sites;
    }

    public function getCats() {//获取商家分类
        $data = array(
            "activitySlug" => '',
            "type" => "merchant",
            "needCouponCount" => false,
            "lang" => LANG_SET
        );
        $cats = getCodeJson($data, 'getCategroyList');
        return $cats[0]['categroys'];
    }

    public function getFilters($cat_id,$cats,$alpha_name,$kind_id,$kinds,$parasArr,$sites) {//筛选条件
        $filters = array(//筛选
            0 => array(
                "name" => getArrayField($cat_id, $cats, 'name'),
                "href" => filterParas($parasArr, $sites['cat_id'])
            ),
            1 => array(
                "name" => $alpha_name,
                "href" => filterParas($parasArr, $sites['alpha_id'])
            ),
            2 => array(
                "name" => getArrayOne($kind_id, $kinds),
                "href" => filterParas($parasArr, $sites['kind_id'])
            )
        );
        foreach ($filters as $k => $v) {//清除空的筛选数组
            if ($v['name'] == '') {
                unset($filters[$k]);
            }
        }
        return $filters;
    }

    public function getMerchants($cat_id, $alpha_name, $kind_id, $feature_ids, $ord, $pagecur, $pagenum, $keyword = '') {
        if ($alpha_name == '0-9') {
            $alpha_name = '0,1,2,3,4,5,6,7,8,9';
        }
        if ($kind_id == 1) {
            $startLevel = 1;
            $endLevel = 1;
        } else {
            $startLevel = 0;
            $endLevel = 5;
        }
        $data = array(
            "queryStart" => ($pagecur - 1) * $pagenum,
            "queryCount" => 20,
            "activitySlug" => '',
            "needCouponCount" => true,
            "startLevel" => $startLevel,
            "endLevel" => $endLevel,
            "misNoCouponMerchant" => false,
            "categoryIds" => $cat_id ? $cat_id : "",
            "featureIds" => $feature_ids ? $feature_ids : "",
            "namePrefix" => $alpha_name ? $alpha_name : "",
            "doubleRate" => ($kind_id == 2) ? true : false,
            "hotCoupon" => ($kind_id == 3) ? true : false,
            "keyword" => $keyword ? $keyword : "",
            "orderType"=>$ord>1?$ord:1,
            "lang" => LANG_SET
        );
        $merchants = getCodeJson($data, 'getMerchantList');
        return $merchants;
    }

    public function getFeatureList() {
        $data = array(
            "queryStart" => 0,
            "queryCount" => 3,
            "needCouponCount" => false,
            "lang" => LANG_SET
        );
        $rs = getCodeJson($data, 'getFeatureList');
        $features = $rs[0]['features'];
        foreach ($features as $k => $v) {
            if ($k == 0) {
                $features[$k]['power'] = "1,3,5,7"; //直邮
            } else if ($k == 1) {
                $features[$k]['power'] = "2,3,6,7"; //信用卡
            } else if ($k == 2) {
                $features[$k]['power'] = "4,5,6,7"; //paypal
            }
        }
        return $features;
    }

    public function getFeatureIds($feature_id, $features) {
        $feature_idsArr = array();
        if ($feature_id > 0) {
            foreach ($features as $v) {
                $powers = explode(",", $v['power']);
                if (in_array($feature_id, $powers)) {
                    $feature_idsArr[] = $v['id'];
                }
            }
            if ($feature_idsArr) {
                $feature_ids = implode(",", $feature_idsArr);
            }
            return $feature_ids;
        }
    }

}
?>

