<?php
return array(
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => array(
        '/^stores$/' => 'Stores/lists',
        '/^stores\/list-([0-9-]+)$/' => 'Stores/lists?paras=:1',
        '/^stores\/([a-zA-Z0-9_ -]+)\/coupons-([0-9-]+)$/' => 'Stores/detail?name=:1&p=:2', //stores/:id\d
        '/^stores\/([a-zA-Z0-9_ -]+)$/' => 'Stores/detail?name=:1', //stores/:id\d
        '/^deals$/'=>'Deals/lists',
        '/^deals\/list-([0-9-]+)$/' => 'Deals/lists?paras=:1',
        '/^deals\/([a-zA-Z0-9_ -]+)$/'=>'Deals/detail?id=:1',
        'search' => 'Search/stores_coupons',
        'thank-you' => 'Other/thanks',
        '/^local/' => 'Other/selectLang',
        '/^reg/' => 'Other/reg',
        'forget' => 'Pwd/find',
        'sendtip' => 'Pwd/send_tip',
        'error' => 'Other/error404',
//        '/^index/' => 'Index/index',
        '/^promotion\/([a-zA-Z0-9_ -]+)$/' => 'Promotion/detail?name=:1',
        '/^promotions\/([a-zA-Z0-9_ -]+)$/' => 'Promotions/detail?name=:1',
    ),
    'pages' => array(
        'site_store' => '5', //商家列表页分页参数位置 必须是最末尾
    ),
    'HTML_CACHE_ON' => false, // 开启静态缓存
    'HTML_CACHE_TIME' => 3600, // 全局静态缓存有效期（秒）
    'HTML_FILE_SUFFIX' => '.html', // 设置静态缓存文件后缀
    'HTML_CACHE_RULES' => array(// 定义静态缓存规则
        // 定义格式1 数组方式
        'stores:' => array('Stores/' . $lang_sel . '/_q_{$_GET.query}k_{$_GET.keywords}n_{$_GET.name}_{$_GET.paras}_{$_GET.p}'),
        'index:' => array('Index/' . $lang_sel . '/_{:action}'),
        'promotion:' => array('Promotion/' . $lang_sel . '/{$_GET.name}'),
        'promotions:' => array('Promotions/' . $lang_sel . '/{$_GET.name}')
    ),
    'version' => "",
    'url_admin' => "/Public/Admin/", //http://pics.erdangjiade.com/newrm/  前台css、js路径
    "url_service" => "http://service.demo.com/rest/", //http://10.1.1.200:8080/rest/coupon/ http://service.demo.com/rest/
);
