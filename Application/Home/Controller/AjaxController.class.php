<?php

namespace Home\Controller;

use Think\Controller;

class AjaxController extends CommonController {
    /*
     *普通用户注册
     */
    public function commonUserRegister(){


    }
    /**
     *获取验证码
     */
    public function getCodeByPhone(){
        header("Content-Type: text/html; charset=UTF-8");
        $mobile = I('get.phone');
        $flag = 0;
        $params='';//要post的数据
        $verify = rand(123456, 999999);//获取随机验证码
        $argv = array(
            'name'=>'13671989456',     //必填参数。用户账号
            'pwd'=>'A674A2AB5ACFC4E4E19B5AF3F156',     //必填参数。（web平台：基本资料中的接口密码）
            'content'=>'短信验证码为：'.$verify.'，请勿将验证码提供给他人。',   //必填参数。发送内容（1-500 个汉字）UTF-8编码
            'mobile'=>$mobile,   //必填参数。手机号码。多个以英文逗号隔开
            'stime'=>'',   //可选参数。发送时间，填写时已填写的时间发送，不填时为当前时间发送
            'sign'=>'上海麦不麦智能科技',    //必填参数。用户签名。
            'type'=>'pt',  //必填参数。固定值 pt
            'extno'=>''    //可选参数，扩展码，用户定义扩展码，只能为数字
        );
        //print_r($argv);exit;
        //构造要post的字符串
        //echo $argv['content'];
        foreach ($argv as $key=>$value) {
            if ($flag!=0) {
                $params .= "&";
                $flag = 1;
            }
            $params.= $key."="; $params.= urlencode($value);// urlencode($value);
            $flag = 1;
        }
        $url = "http://web.cr6868.com/asmx/smsservice.aspx?".$params; //提交的url地址
        $con= substr( file_get_contents($url), 0, 1 );  //获取信息发送后的状态
        if($con == '0'){
            //Todo 把手机号和验证码入库
            $userCode= M("maiclub_usercode"); // 实例化maiclub_usercode对象
            $data['id'] = null;
            $data['telephone'] = $mobile;
            $data['code'] = $verify;
            if($userCode->add($data)){
                echo "200";
            }
        }else{
            echo "110";
        }
    }
    /**
     *验证码进行验证
     *
     */
    public function identifyCode(){
        $userCode= M("maiclub_usercode"); // 实例化maiclub_usercode对象
        $telephone = I('get.UserPhone');
        $code = I('get.ShortMessage');
        $where['telephone']=$telephone;
        $where['code']=$code;
        $where['status']=1;
        $rs =  $userCode->where($where)->find();
        if($rs){
            echo 200;
        }else{
            echo 101;
        }
    }
    /*
    * 代理商用户名验证
    */
    public function nickname(){
        $agent=M('maiclub_agent');
        $nickname=I("get.nickname");
        $where['nickname']=$nickname;
        $re=$agent->where($where)->find();
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
    * 代理商用户名验证是否重复注册
    */
    public function isRegisterAgent(){
        $agent=M('maiclub_agent');
        $agentname=I("get.agentname");
        $where['agentname']=$agentname;
        $re=$agent->where($where)->find();
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
    * 代理商手机是否重复注册
    */
    public function isRegisterAgentPhone(){
        $agent=M('maiclub_agent');
        $telephone=I("get.UserPhone");
        $where['telephone']=$telephone;
        $re=$agent->where($where)->find();
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
    * 普通用户名验证是否重复注册
    */
    public function isRegisterCommonUser(){
        $agent=M('maiclub_user');
        $account=I("get.businessName");
        $where['account']=$account;
        $re=$agent->where($where)->find();
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
    * 普通用户手机是否重复注册
    */
    public function isCommonAgentPhone(){
        $agent=M('maiclub_agent');
        $telephone=I("get.UserPhone");
        $where['telephone']=$telephone;
        $re=$agent->where($where)->find();
        if($re){
            echo 1;
        }else{
            echo 0;
        }
    }
    /*
     * 普通用户修改个人信息
     */
    public function updateCommonUserInfo(){
        $username = I('get.userName');
        $sex = I('get.sex');
        $email = I('get.email');
        $location = I('get.address');
        $uid = I('get.uid');
        $regTime = time();
        $userModel = M("maiclub_user"); // 实例化User对象
        // 要修改的数据对象属性赋值
        $data['username'] = $username;
        $data['sex'] = $sex;
        $data['email'] = $email;
        $data['location'] = $location;
        $data['regTime'] = $regTime;
        $where['id'] = $uid;
        // 根据条件更新记录
        if($userModel->where($where)->save($data)){
            echo 200;
        }else{
            echo 110;
        }

    }

    /*
    * 普通用户修改用户密码
    */
    public function updateCommonUserPassword(){
        $key = '$erdangjiade$';
        $password = md5($key.I('get.password'));
        $newPassword = md5($key.I('get.newPassword'));
        $reNewPassword=md5($key.I('get.reNewPassword'));
        $uid = I('get.uid');
        $userModel = M('maiclub_user');
        $where['password'] = $password;
        $where['id'] = $uid;
        if($userModel->where($where)->find()){
            if($newPassword == md5($key.'')){
                echo 102;
            }else{
                if($newPassword != $reNewPassword){
                    echo 100;
                }else{
                    $wheres['id'] = $uid;
                    $data['password'] = $newPassword;
                    if($userModel->where($wheres)->save($data)){
                        echo 200;
                    }else{
                        echo 110;
                    }
                }
            }
        }else{
            echo 0;
        }
    }
    /*
    * 普通用户修改用户绑定手机
    */
    public function updateUserPhone(){
        $phone=I('get.newphone');
        $id=I('get.uid');
        $userModel = M('maiclub_user');
        $where['id']=$id;
        $data['telephone']=$phone;
        if($userModel->where($where)->save($data)){
            echo 0;
        }else{
            echo 1;
        }

    }
    /*
    * 代理商修改用户密码
    */
    public function updateCommonAgentPassword(){
        $key = '$agent$';
        $password = md5($key.I('get.password'));
        $newPassword = md5($key.I('get.newPassword'));
        $reNewPassword=md5($key.I('get.reNewPassword'));
        $uid = I('get.uid');
        $agentModel = M('maiclub_agent');
        $where['password'] = $password;
        $where['id'] = $uid;
        if($agentModel->where($where)->find()){
            if($newPassword == md5($key.'')){
                echo 102;
            }else{
                if($newPassword != $reNewPassword){
                    echo 100;
                }else{
                    $wheres['id'] = $uid;
                    $data['password'] = $newPassword;
                    if($agentModel->where($wheres)->save($data)){
                        echo 200;
                    }else{
                        echo 110;
                    }
                }
            }
        }else{
            echo 0;
        }
    }
    /*
     *代理商邀请码验证
     */
    public function invitedCode(){
        $invitedCode=I('get.invitedCode');
        $invited=M('maiclub_invitationcode');
        $where['invitation_code']=$invitedCode;
        $where['status']= '0' ;
        if($invited->where($where)->find()){
                echo 200;
        }else{
            echo 100;
        }
    }
    /*
    * 代理商修改用户绑定手机
    */
    public function updateAgentPhone(){

        $phone=I('get.newphone');
        $id=I('get.uid');
        $userModel = M('maiclub_agent');
        $where['id']=$id;
        $data['telephone']=$phone;
        if($userModel->where($where)->save($data)){
            echo 0;
        }else{
            echo 1;
        }
    }
    public function order(){
        $adTypeId=I('get.adTypeId');
        if($adTypeId == 1){
            session('adTypeId',$adTypeId);
            echo 1;
        }else{
            echo 0;
        }
    }
    public function package(){
        $packageId=I('get.packageId');
        if($packageId == ''){
            echo 0;
        }else{
            session('packageId',$packageId);
            echo 1;
        }
    }
    /*
    * 下订单页面的二级菜单
    */
    public function city(){
        $pro=I('get.pro');
        $city=M('maiclub_category');
        $where['ParentId']=$pro;
        $data=$city->where($where)->field('id,categoryname')->select();
        echo json_encode($data);

    }
    /*
    * 代理商修改个人信息
    */
    public function updateCommonAgentInfo(){
        $realname = I('get.realname');
        $sex = I('get.sex');
        $email = I('get.email');
        $wechat=I('get.wechat');
        $wechatslogan=I('get.wechatslogan');
        $location = I('get.address');
        $agentid = I('get.agentid');
        $regTime = time();
        $agent = M("maiclub_agent"); // 实例化User对象
        $prov=I('get.prov');
        $cate=M('maiclub_category');//实例化类别表
        $wheres['CategoryName']=$prov;
        $regional=$cate->where($wheres)->field('regional')->select();
        // 要修改的数据对象属性赋值
        $data['realname'] = $realname;
        $data['wechat']=$wechat;
        $data['wechatSlogan']=$wechatslogan;
        $data['sex'] = $sex;
        $data['email'] = $email;
        $data['location'] = $location;
        $data['regTime'] = $regTime;
        $data['regional']=$regional[0]['regional'];
        $where['id'] = $agentid;
        // 根据条件更新记录
        if($agent->where($where)->save($data)){
            echo 200;
        }else{
            echo 110;
        }

    }
    //广告计划中的联系我们
    public function contactUs(){
        $city=I('get.city');
        $category=M('maiclub_category');
        $where['id']=$city;
        $cityname=$category->where($where)->field('categoryname,parentid')->select();
        $proname=$category->where("id = {$cityname[0]['parentid']}")->field('id,categoryname')->select();
        $location=$proname[0]['categoryname'].$cityname[0]['categoryname'];
        $agent=M('maiclub_agent');
        $data=$agent->where("location like '%{$location}%'")->field('id,telephone,agentname,realname,level,location')->select();
        echo json_encode($data);
    }
    public function updateAgentHead(){
        $agentCountId=I('cookie.agentCountId');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveRule = uniqid;
        // 上传文件
        $info   =   $upload->upload($_FILES);
        $agentModel=M('maiclub_agent');
        $data['headImg'] = $info['avatar']['savepath'].$info['avatar']['savename'];
        $data['id']=$agentCountId;
        if($agentModel->save($data)){
            echo 1;exit;
        }else{
            echo 2;exit;
        }
    }
    public function updateUserHead($isMobile=0){
        $isMobile = !empty($_POST['isMobile'])?$_POST['isMobile']:0;
        if($isMobile==7){
            $commonAccountId = $_POST['commonAccountId'];
            $picFiles  = $_POST['picFiles'];
        }else{
            $commonAccountId=I('cookie.commonAccountId');
            $picFiles  = $_FILES;
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveRule = uniqid;
        // 上传文件
        $info   =   $upload->upload($picFiles);
        $userModel=M('maiclub_user');
        $data['headimg'] = $info['avatar']['savepath'].$info['avatar']['savename'];
        $data['id']=$commonAccountId;
        if($userModel->save($data)){
            echo 1;exit;
        }else{
            echo 222;exit;
        }
    }



}
