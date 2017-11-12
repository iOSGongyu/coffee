<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller {
    function _initialize() {
        header("Content-type: text/html; charset=utf-8");
        $assignArr = array(
            "control" => strtolower(CONTROLLER_NAME),
            "mod" => strtolower(ACTION_NAME),
            'lang_kind' => LANG_SET,
            'time_cur' => time(),
            'url_admin' => C("url_admin"),
            "version" => C("version"),
            'current_url' => get_url(),
        );
        $this->assign($assignArr);
    }

}
