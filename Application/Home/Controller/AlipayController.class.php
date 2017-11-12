<?php
namespace Home\Controller;

use Think\Controller;

class AlipayController extends CommonController {

    //在类初始化方法中，引入相关类库
    public function __construct() {
        parent::__construct();//初始化
        Vendor('Alipay.lib.alipay_core','','.function.php');
        Vendor('Alipay.lib.alipay_core','','.function.php');
        Vendor('Alipay.lib.alipay_notify','','.class.php');
        Vendor('Alipay.lib.alipay_submit','','.class.php');
    }
    //支付首页
    public function index(){
        if(checkUserLogin()){
            $userid=I('get.id');
            $orderid=I('get.orderid');
            $order=M('maiclub_order');
            if($orderid != ''){
                $userOrder=$order->where("id = {$orderid}")->select();
            }else{
                $userOrder=$order->where("userId = {$userid}")->order('createTime desc')->limit(1)->select();
            }
            $package=M('maiclub_package');
            $price=$package->where("id= {$userOrder[0]['packageid']}")->field('price')->select();
            $id=I('cookie.commonAccountId');
            $userModel=M('maiclub_user');
            $headimg=$userModel->where("id= {$id}")->field('headimg,mobileheadimg')->select();
            $this->assign('headimg',$headimg);
            $this->assign('price',$price);

            $this->assign('userOrder',$userOrder);
            $this->display();
        }
    }

    //doalipay方法
    /*该方法其实就是将接口文件包下alipayapi.php的内容复制过来
      然后进行相关处理
    */
    public function doalipay(){
        $alipay_config['partner']		= '2088121687073805';
        $alipay_config['seller_email']	= '826096331@qq.com';
        $alipay_config['key']			= '7owv1h8dvsjrmirlxv36rmkvforf9thw';
        $alipay_config['sign_type']    = strtoupper('MD5');
        //字符编码格式 目前支持 gbk 或 utf-8
        $alipay_config['input_charset']= strtolower('utf-8');
        //ca证书路径地址，用于curl中ssl校验
        //请保证cacert.pem文件在当前文件夹目录中
        $alipay_config['cacert']    = getcwd().'\\cacert.pem';
        //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
        $alipay_config['transport']    = 'http';
        /**************************请求参数**************************/
        $payment_type = "1"; //支付类型 //必填，不能修改
        $return_url = "http://www.maiclub.cn/Alipay/return_url"; //服务器异步通知页面路径
        $notify_url = "http://www.maiclub.cn/Alipay/notify_url"; //服务器异步通知页面路径
        $seller_email = "826096331@qq.com";//卖家支付宝帐户必填
        $order=M('maiclub_order');
        $out_trade_no = $_POST['WIDout_trade_no'];//商户订单号 通过支付页面的表单进行传递，注意要唯一！、
        $where['orderNo']=$out_trade_no;
        if($order->where($where)->find()){
        $subject = $_POST['WIDsubject'];  //订单名称 //必填 通过支付页面的表单进行传递
        $total_fee = $_POST['WIDtotal_fee'];   //付款金额  //必填 通过支付页面的表单进行传递
            $package=M('maiclub_package');
            $packageid=$order->where($where)->field('packageid')->select();
            $price=$package->where("id = {$packageid[0]['packageid']}")->field('price')->select();
            if($total_fee == $price[0]['price']){
                $body = $_POST['WIDbody'];  //订单描述 通过支付页面的表单进行传递
                $show_url = $_POST['WIDshow_url'];  //商品展示地址 通过支付页面的表单进行传递
                $anti_phishing_key = "";//防钓鱼时间戳 //若要使用请调用类文件submit中的query_timestamp函数
                $exter_invoke_ip = get_client_ip(); //客户端的IP地址
            }else{
               echo "<script>alert('亲，不要改价格好吧')</script>";
               echo "<script>location.href='../Order/index'</script>";
            }
       }else{
            echo "<script>alert('出错')</script>";
            echo "<script>location.href='../Order/index'</script>";
       }
        /************************************************************/

        //构造要请求的参数数组，无需改动
        $parameter = array(
            "service" => "create_direct_pay_by_user",
            "partner" => trim($alipay_config['partner']),
            "payment_type"    => $payment_type,
            "notify_url"    => $notify_url,
            "return_url"    => $return_url,
            "seller_email"    => $seller_email,
            "out_trade_no"    => $out_trade_no,
            "subject"    => $subject,
            "total_fee"    => $total_fee,
            "body"            => $body,
            "show_url"    => $show_url,
            "anti_phishing_key"    => $anti_phishing_key,
            "exter_invoke_ip"    => $exter_invoke_ip,
            "_input_charset"    => trim(strtolower($alipay_config['input_charset']))
        );
        //建立请求
        $alipaySubmit = new \AlipaySubmit($alipay_config);
        $html_text = $alipaySubmit->buildRequestForm($parameter,"get", "确认");
        echo $html_text;
    }

    /******************************
    服务器异步通知页面方法
    其实这里就是将notify_url.php文件中的代码复制过来进行处理

     *******************************/
    function notify_url(){
        /*
        同理去掉以下两句代码；
        */
        //require_once("alipay.config.php");
        //require_once("lib/alipay_notify.class.php");

        //这里还是通过C函数来读取配置项，赋值给$alipay_config
        $alipay_config['partner']		= '2088121687073805';
        $alipay_config['seller_email']	= '826096331@qq.com';
        $alipay_config['key']			= '7owv1h8dvsjrmirlxv36rmkvforf9thw';
        $alipay_config['sign_type']    = strtoupper('MD5');
        //字符编码格式 目前支持 gbk 或 utf-8
        $alipay_config['input_charset']= strtolower('utf-8');
        //ca证书路径地址，用于curl中ssl校验
        //请保证cacert.pem文件在当前文件夹目录中
        $alipay_config['cacert']    = getcwd().'\\cacert.pem';
        //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
        $alipay_config['transport']    = 'http';
        //计算得出通知验证结果
        $alipayNotify = new AlipayNotify($alipay_config);
        $verify_result = $alipayNotify->verifyNotify();
        if($verify_result) {
            //验证成功
            //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
            $out_trade_no   = $_POST['out_trade_no'];      //商户订单号
            $trade_no       = $_POST['trade_no'];          //支付宝交易号
            $trade_status   = $_POST['trade_status'];      //交易状态
            $total_fee      = $_POST['total_fee'];         //交易金额

            $parameter = array(
                "out_trade_no"     => $out_trade_no, //商户订单编号；
                "trade_no"     => $trade_no,     //支付宝交易号；
                "total_fee"     => $total_fee,    //交易金额；
                "trade_status"     => $trade_status, //交易状态

            );

            if($_POST['trade_status'] == 'TRADE_FINISHED') {
                echo "<script>location.href='../Order/index'</script>";
            }else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
                $order=M('maiclub_order');
                $package=M('maiclub_package');
                $where['orderNo']=$out_trade_no;
                $data['status']=1;
                $data['trade_no']=$trade_no;
                if($order->where($where)->save($data)){
                    echo "<script>location.href='../Order/index'</script>";
                }
            }
                  //请不要修改或删除
        }else {
            //验证失败
            echo "fail";
        }
    }

    /*
    页面跳转处理方法；
    这里其实就是将return_url.php这个文件中的代码复制过来，进行处理；
    */
    function return_url(){
        //头部的处理跟上面两个方法一样，这里不罗嗦了！
        $alipay_config['partner']		= '2088121687073805';
        $alipay_config['seller_email']	= '826096331@qq.com';
        $alipay_config['key']			= '7owv1h8dvsjrmirlxv36rmkvforf9thw';
        $alipay_config['sign_type']    = strtoupper('MD5');
        //字符编码格式 目前支持 gbk 或 utf-8
        $alipay_config['input_charset']= strtolower('utf-8');
        //ca证书路径地址，用于curl中ssl校验
        //请保证cacert.pem文件在当前文件夹目录中
        $alipay_config['cacert']    = getcwd().'\\cacert.pem';
        //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
        $alipay_config['transport']    = 'http';
        $alipayNotify = new \AlipayNotify($alipay_config);//计算得出通知验证结果
        $verify_result = $alipayNotify->verifyReturn();
        if($verify_result) {
            //验证成功
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
            $out_trade_no   = $_GET['out_trade_no'];      //商户订单号
            $trade_no       = $_GET['trade_no'];          //支付宝交易号
            $trade_status   = $_GET['trade_status'];      //交易状态
            $parameter = array(
                "out_trade_no"     => $out_trade_no,      //商户订单编号；
                "trade_no"     => $trade_no,          //支付宝交易号；
                "trade_status"     => $trade_status,      //交易状态
            );

            if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
                $order=M('maiclub_order');
                $package=M('maiclub_package');
                $where['orderNo']=$out_trade_no;
                $data['status']=1;
                $data['trade_no']=$trade_no;
                if($order->where($where)->save($data)){
                    echo "<script>location.href='../Order/index'</script>";
                }


            }
            else {
                    echo "<script>location.href='../Order/index?orderNo=$out_trade_no&trade_no=$trade_no'</script>";

            }



            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        }
        else {
            //验证失败
            //如要调试，请看alipay_notify.php页面的verifyReturn函数
            echo "验证失败";
        }
    }
}