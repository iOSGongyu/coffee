<?php
function pr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
function checkLogin(){
    $uid = session('uid');
    if(!empty($uid)){
        return 1;
    }else{
        redirect('/Admin/login/', 3, '您无权访问，请先登陆...');
    }
}
//数数
function countString($string){
    $num = substr_count($string,',')-1;
    $content = str_pad('',$num*2,'-');
    return $content;
}

function getUnionLoginCheckcode($uid) {
    $privateKey = S("union_private_key");
    if (empty($privateKey)) {
        $data = array(
            "slug" => "userKey",
        );
        $rs = getCodeJson($data, 'getGlobalVarBySlug', '', 2);
        if ($rs) {
            $privateKey = $rs[0]['var']['value'];
        } else {
            $privateKey = "5edgka9gu724l7uslc";
        }
        S("union_private_key", $privateKey, 3600);
    }
    return md5($uid . $privateKey);
}

function getEndtime($startdate, $enddate) {
    $endtime_t = strtotime($enddate);
    $starttime_t = strtotime($startdate);
    $now = time();
    $words = L('ended');
    if ($starttime_t > $now) {
        $days = ceil(($starttime_t - $now) / 3600 / 24);
        if ($days > 3) {
            $words = L("just_starttime", array("days" => $days));
        } else if ($days > 1) {
            $words = "<span class='red'>" . L("just_starttime", array("days" => $days)) . "</span>";
        } else {
            $words = -1;
        }
    } else {
        if ($endtime_t > $now) {
            $days = ceil(($endtime_t - $now) / 3600 / 24);
            if ($days > 3) {
                $words = L("just_endtime", array("days" => $days));
            } else if ($days > 1) {
                $words = "<span class='red'>" . L("just_endtime", array("days" => $days)) . "</span>";
            } else {
                $words = 1;
            }
        }
    }
    if ($words == 1) {
        $words = "<span class='endtime' data-value='" . strtotime($enddate) . "' data-type='1'></span>";
    } elseif ($words == -1) {
        $words = "<span class='endtime' data-value='" . strtotime($startdate) . "' data-type='-1'></span>";
    }
    return $words;
}

function getTemplateUrl($id, $site, $prevfix = 'list-', $default_site = 'site_store') {//site 位置  最后一个是page位置，去除为0
    $default = getParamZero(C("pages." . $default_site . ""));
    $paras = I("get.paras", $default);
    $parasArr = explode("-", $paras);
    $paranum = count($parasArr);
    if ($paranum > 1) {
        foreach ($parasArr as $k => $v) {
            if ($k == $site) {
                $parasArr[$k] = $id;
                break;
            }
        }
        $parasArr[$paranum - 1] = 0; //page位置
        $parasLast = implode("-", $parasArr);
    }
    if ($parasLast == $default or $parasLast == $prevfix . $default) {
        $parasLast = '';
    } else {
        $parasLast = $prevfix . $parasLast;
    }

    return $parasLast;
}

function getClassSelected($id, $site, $cla = 'on', $default_site = 'site_store') {
    $ids = explode(",", $id);
    $para_default = $para_default ? $para_default : getParamZero(C("pages." . $default_site . ""));
    $paras = I("get.paras") ? I("get.paras") : $para_default;
    $cla2 = '';
    if ($paras) {
        $parasArr = explode("-", $paras);
        foreach ($parasArr as $k => $v) {
            if ($k == $site && in_array($v, $ids)) {
                $cla2 = $cla;
                break;
            }
        }
    }
    return $cla2;
}

function getParamZero($num) {
    $sites = '';
    for ($i = 0; $i <= $num; $i++) {
        $sites .= "0-";
    }
    return substr($sites, 0, -1);
}

function getArrayField($id, $arr, $field = 'name') {
    if ($id > 0) {
        foreach ($arr as $v) {
            if ($v['id'] == $id) {
                return $v[$field];
                break;
            }
        }
    }
}

function getArrayOne($id, $arr) {
    if ($id > 0) {
        foreach ($arr as $k => $v) {
            if ($k == $id) {
                return $v;
                break;
            }
        }
    }
}

function filterParas($parasArr, $site) {
    foreach ($parasArr as $k => $v) {
        if ($k == $site) {
            $parasArr[$k] = 0;
            break;
        }
    }
    return implode("-", $parasArr);
}

function getSiteKey($site_code) {
    $site_key = "950eb1c9c6395a1a24cf7032dc8dec3d";
    switch ($site_code) {
        case "zhuanyun":
            $site_key = "2451589652WDESRFTG25GTFR562356ED";
            break;
    }
    return $site_key;
}

function getCodeJson($data, $func, $site_code = "erdangjiade", $mtype = "") {
    $site_code = $site_code ? $site_code : "erdangjiade";
    $key = getSiteKey($site_code);
    $data_json = json_encode($data);
    $beforeCheck = $site_code . $data_json . $key;
    $check_code = md5($beforeCheck);
    if ($mtype == 2) {
        $url_func = "user";
    } else {
        $url_func = "coupon";
    }
    $url = C("url_service") . $url_func . "/" . $func . "?siteCode=" . $site_code . "&data=" . urlencode($data_json) . "&checkCode=" . $check_code . "";
    if ($func == 'getUserOrderInfo') {
//        $url = C("url_service") . $url_func . "/" . $func . "?siteCode=" . $site_code . "&data=" . $data_json . "&checkCode=" . $check_code . "";
//      echo $url.'<br/>'; 
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $lists = json_decode($output, true);
    return $lists;
}

function getCouponUrl($url_jump, $chid, $id, $showpage = 1) {
    if ($url_jump) {
        $sitecode = 'erdangjiade';
        $url_arr = explode("key=", $url_jump);
        $key = $url_arr[1];
        $chid = $chid . "-" . $id;
        $partneruname = '';
        $sitekey = getSiteKey($sitecode);
        $checkcode = md5($key . $sitecode . $showpage . $partneruname . $sitekey . $chid);
        $url_jump_suffix = $url_jump . "&sitecode=" . $sitecode . "&showpage=" . $showpage . "&chid=" . $chid . "&checkcode=" . $checkcode . "";
        return $url_jump_suffix;
    }
}

function getSeo($field) {
    $seoArr = S(LANG_SET."_rm_seo_".$field);
    if (empty($seoArr)) {
        $data = array(
            "lang" => LANG_SET,
            "slug" => $field
        );
        $seoJson = getCodeJson($data, 'getSEOBySlug');
        if (isset($seoJson[0]['seo'])) {
            $seoArr = $seoJson[0]['seo'];
        } else {
            $seoArr = array("keywords" => "", "description" => "", "title" => "");
        }
        S(LANG_SET."_rm_seo_".$field,$seoArr,3600);
    }
    return $seoArr;
}

function getCouponLogo($logo_coupon, $logo_merchant) {
    if (empty($logo_coupon)) {
        $logo_coupon = $logo_merchant;
    }
    return $logo_coupon;
}

function getRebate($range) {
    if ($range == 1) {
        $word = L("up_to");
    } else {
        $word = L("rebate");
    }
    return $word;
}

function getRebateEmpty($range) {
    if ($range == 1) {
        $word = L("up_to");
    } else {
        $word = L("visit_shopping_get_rebates");
    }
    return "<font>" . $word . "</font>";
}

function getSlugPlus($commission, $slug = 'zhuanyundianping') {
    if ($slug == 'zhuanyundianping') {
        if ($commission > 0 && LANG_SET == 'zh') {
            $zy_reward = S('zhuanyun_reward');

            if (!$zy_reward) {
                $data = array("slug" => $slug);
                $zy_reward = getCodeJson($data, 'getGlobalVarBySlug');
                S('zhuanyun_reward', $zy_reward, 1800);
            }
            if ($zy_reward[0]['totalCount'] > 0) {
                $var = $zy_reward[0]['var'];
                return "+<a href='" . $var['toUrl'] . "' class='dollar' target='_blank'>" . $var['value'] . "</a>";
            }
        }
    }
}

function getUrlJson($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    $lists = json_decode($output, true);
    return $lists;
}

/**
 * 获取当前页面完整URL地址
 */
function get_url() {
    $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
    $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
    $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
    $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self . (isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : $path_info);
    $relate_url = $sys_protocal . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '') . $relate_url;
    return urlencode($relate_url);
}
