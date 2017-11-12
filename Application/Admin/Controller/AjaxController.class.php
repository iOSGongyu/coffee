<?php

namespace Admin\Controller;

use Think\Controller;

class AjaxController extends Controller {



    public function userAdd(){//添加管理员
        header("content-type:text/html;charset=utf-8");
        $key = '$maiclub$';
        $user = I('get.user');
        $passwd = md5($key.I('get.passwd'));
        $role = I('get.role');
        $roleName = I('get.roleName');
        $User = M("admin"); // 实例化admin对象
        $data['id'] = null;
        $data['user'] = $user;
        $data['passwd'] = $passwd;
        $data['role'] = $role;
        $data['roleName'] = $roleName;
        $data['createTime'] = time();
        $data['modifyTime'] = time();
        if($User->add($data)){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function adminUpdate(){  //修改管理员信息
        header("content-type:text/html;charset=utf-8");
        $key = '$maiclub$';
        $id=I('get.admin1_id');
        $user = I('get.user');
        $passwd = md5($key.I('get.passwd'));
        $role = I('get.role');
        $roleName = I('get.roleName');
        if($roleName!= " "){
            $data['role']=$role;
            $data['roleName']=$roleName;
        }
        $Admin=M("admin");
        $data['id']=$id;
        $data['user']=$user;
        $data['passwd']=$passwd;
        if($Admin->data($data)->where("id={$id}")->save()){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function userDel(){//删除管理员
        header("content-type:text/html;charset=utf-8");
        $id = I('get.id');
        $User = M("admin"); // 实例化admin对象
        $where['id'] = $id;
        if($User->where($where)->delete()){
            echo "<script>alert('Delete Success');location.href='/Admin/Web/userList'</script>";
        }else{
            echo 0;
        }
    }
    public function categoryAdd() {//添加菜单
        header("content-type:text/html;charset=utf-8");
        $categoryName = I('get.categoryName');
        $isShow = I('get.isShow');
        $isCase = I('get.isCase');
        $Category = M("category");
        $data['CategoryName'] = $categoryName;
        $data['IsShowNav'] = $isShow;
        $data['isCase'] = $isCase;
        $data['time'] = time();
        if($Category->add($data)){
            echo 1;
        }else{
            echo 0;
        }


    }
    //修改分类
    public function categoryUpdate(){
        header("content-type:text/html;charset=utf-8");
        $categoryid=I('get.categoryid');
        $isShow = I('get.isShow');
        $Category = M("category");
        $data['id']=$categoryid;
        $data['IsShowNav'] = $isShow;
        if($Category->save($data)){
            echo 1;
        }else{
            echo 0;
        }
    }
    //打印测试数据
    public function pr($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    //添加商圈

    public function uploads(){
        header("content-type:text/html;charset=utf-8");
        //dump($_POST);exit;
        $categoryId = I('post.categoryId');
        $businessDistrictName = I('post.title');
        $describe = I('post.describe');
        $businessInfo=I('post.businessInfo');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveRule = uniqid;
        // 上传文件
        $info   =   $upload->upload($_FILES);
        $MaiDistrict = M("case");
        $data['categoryId'] = $categoryId;
        $data['title'] = $businessDistrictName;
        $data['describe'] = $describe;
        $data['img'] = $info['img']['savepath'].$info['img']['savename'];
        $data['detail']=$businessInfo;
        $data['createTime'] = time();
        if($MaiDistrict->add($data)) {
            echo "<script>alert('添加案例成功')</script>";
            echo "<script>location.href='../Learn/learnInformationAdd'</script>";
        }else{
            echo "<script>alert('添加失败')</script>";
            echo "<script>history.back()</script>";
        }
    }
    //修改商圈
    public function update(){
        header("content-type:text/html;charset=utf-8");
        $id = I('post.id');
        $categoryId = I('post.categoryId');
        $businessDistrictName = I('post.title');
        $describe = I('post.describe');
        $businessInfo=I('post.businessInfo');
        if($_FILES["img"]["name"]!=""){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveRule = uniqid;
        // 上传文件
        $info   =   $upload->upload($_FILES);
            if($info){
                $data['img'] = $info['img']['savepath'].$info['img']['savename'];
            }else{
                echo "图片上传失败！";
            }
        }
        $MaiDistrict = M("case");
        $data['id']=$id;
        $data['categoryId'] = $categoryId;
        $data['title'] = $businessDistrictName;
        $data['describe'] = $describe;
        $data['detail']=$businessInfo;
        $data['createTime'] = time();
        if($MaiDistrict->save($data)) {
            echo "<script>alert('修改案例成功')</script>";
            echo "<script>location.href='../Learn/lists'</script>";
        }else{
            echo "<script>alert('添加失败')</script>";
            echo "<script>history.back()</script>";
        }

    }
    //新闻添加
    public function newsAdd(){
        header("content-type:text/html;charset=utf-8");
        $categoryId = I('post.categoryId');
        $clickNum = I('post.clickNum');
        $title = I('post.title');
        $describe = I('post.describe');
        $details=I('post.details');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveRule = uniqid;
        // 上传文件
        $info   =   $upload->upload($_FILES);
        $News=M('news');
        $data['categoryId']=$categoryId;
        $data['clickNum']=$clickNum;
        $data['title']=$title;
        $data['newsImg']=$info['newsImg']['savepath'].$info['newsImg']['savename'];
        $data['details']=$details;
        $data['describe']=$describe;
        $data['createTime']=time();
        if($News->add($data)) {
            echo "<script>alert('添加新闻成功')</script>";
            echo "<script>location.href='../News/newsAdd'</script>";
        }else{
            echo "<script>alert('添加失败')</script>";
            echo "<script>history.back()</script>";
        }

    }
    //修改新闻
    public function newsUpdate(){
        header("content-type:text/html;charset=utf-8");
        $id = I('post.id');
        $title=  I('post.title');
        $details=I('post.details');
        $clicknum=I('post.clicknum');
        $describe=I('post.describe');
        if($_FILES["newsImg"]["name"]!=""){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveRule = uniqid;
            $info   =   $upload->upload($_FILES);
            if($info){
                $data['newsImg']=$info['newsImg']['savepath'].$info['newsImg']['savename'];}
            else{
                echo "图片上传失败";
            }
        }

        // 上传文件

        $news = M("news");
        $data['id']=$id;
        $data['title']=$title;
        $data['clickNum']=$clicknum;
        $data['details']=$details;
        $data['describe']=$describe;
        $data['createTime']=time();
        if($news->save($data)) {
            echo "<script>alert('新闻修改成功')</script>";
                echo "<script>location.href='../News/lists'</script>";
        }else{
            echo "<script>alert('新闻修改失败')</script>";
            echo "<script>history.back()</script>";
        }

    }
    //公众号添加
    public function wechatAdd(){
        header("content-type:text/html;charset=utf-8");
        $publicName=I('post.publicName');
        $districtId=I('post.districtId');
        $type=I('post.type');
        $createTime=time();
        $union=M('tag');
        $data['tagName']=$publicName;
        $data['caseId']=$districtId;
        $data['type']=$type;
        $data['createTime']=$createTime;
        if($union->add($data)){
            echo 1;
        }else{
            echo 0;
        }
    }
    //修改公众号
    public function wechatUpdate(){
        header("content-type:text/html;charset=utf-8");
        $publicname=I('get.publicname');
        $wechatid = I('get.wechatid');
        $wechat = M("union");
        $data['publicName']=$publicname;
        $data['id'] = $wechatid;
        if($wechat->save($data)){
            echo 1;
        }else{
            echo 0;
        }
    }
    //删除公众号
    public function wechatdel(){
        header("content-type:text/html;charset=utf-8");
        $id = I('get.id');
        $union = M("union");
        $where['id'] = $id;
        if($union->where($where)->delete()){
            echo "<script>alert('删除成功');location.href='/Admin/Wechat/lists'</script>";
        }else{
            echo 0;
        }
    }
    //brand添加
    public function brandAdd(){
        header("content-type:text/html;charset=utf-8");
        $brandName=I('get.brandName');
        $districtId=I('get.districtId');
        $createTime=time();
        $brand=M('brand');
        $data['brandName']=$brandName;
        $data['unionId']=$districtId;
        $data['createTime']=$createTime;
        if($brand->add($data)){
            echo 1;
        }else{
            echo 0;
        }
    }
    //修改brand
    public function brandUpdate(){
        header("content-type:text/html;charset=utf-8");
        $brandId=I('get.brandId');
        $brandName=I('get.brandName');
        $type = I('get.type');
        $brand = M("brand");
        $data['id']=$brandId;
        $data['brandName'] = $brandName;
        $data['type'] = $type;
        if($brand->save($data)){
            echo 1;
        }else{
            echo 0;
        }
    }
    //删除brand
    public function branddel(){
        header("content-type:text/html;charset=utf-8");
        $id = I('get.id');
        $brand = M("brand"); // 实例化brand表
        $where['id'] = $id;
        if($brand->where($where)->delete()){
            echo "<script>alert('删除成功');location.href='/Admin/Wechat/brandLists'</script>";
        }else{
            echo 0;
        }
    }

    public function updateOrder(){
        header("content-type:text/html;charset=utf-8");
        $id=I('post.id');
        $status=I('post.status');
        $agent=I('post.agent');
        $order=M('order');
        //dump($agent);exit;
        $data['id']=$id;
        $data['status']=$status;
        $data['agentId']=$agent;
        if($order->save($data)) {
            echo "<script>alert('修改成功')</script>";
            echo "<script>location.href='../Order/lists'</script>";
        }else{
            echo "<script>alert('修改失败')</script>";
            echo "<script>history.back()</script>";
        }

    }
    /*后台bootstrap-wysiwyg.js上传图片*/
    public function ajaxUploadFile(){
        header("content-type:text/html;charset=utf-8");
        //echo 'https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=1508372197,632975480&fm=80';exit;
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveRule = uniqid;
        // 上传文件
        $info   =   $upload->upload($_FILES);
        $imagesModel=M('images');
        $data['image_url']=$info['editorImage']['savepath'].$info['editorImage']['savename'];
        $data['create_time']=time();
        $data['id']=null;
        if($imagesModel->add($data)) {
            echo __APP__.'/Public/Uploads/'.$data['image_url'];exit;
        }else{
            echo 222;exit;
        }
    }
    //邀请码添加
    public function invitationAdd(){
        header("content-type:text/html;charset=utf-8");
        $invitation_code=I('get.invitation_code');
        $invitation=M('invitationcode');
        $where['invitation_code']=$invitation_code;
        $data['invitation_code']=$invitation_code;
        $data['status']=0;
        $data['create_time']=time();
        if($invitation->where($where)->find()){
            echo 100;
        }else{
            if($invitation->add($data)){
                echo 101;
            }else{
                echo 102;
            }
        }
    }
    //修改留言
    public function messageUpdate(){
        header("content-type:text/html;charset=utf-8");
        $messageid=I('get.messageid');
        $type = I('get.type');
        $message=M('message');
        $data['id']=$messageid;
        $data['type'] = $type;
        if($message->save($data)){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function articleNumber(){
        $records=I('get.records');
        cookie('records',$records);
        if(!empty($records)){
            echo 1;
        }
    }

    public function changeRecords(){
        $records=I('get.records');
        cookie('records',$records);
        if(!empty($records)){
            echo 1;
        }
    }
    //添加seo
    public function seoAdd(){
        header("content-type:text/html;charset=utf-8");
        $alias=I('get.alias');
        $title=I('get.title');
        $keywords=I('get.keywords');
        $desc=I('get.desc');
        $seo=M('seo');
        $data['alias']=$alias;
        $data['title']=$title;
        $data['keywords']=$keywords;
        $data['desc']=$desc;
        $data['createTime']=time();
            if($seo->add($data)){
                echo 101;
            }else{
                echo 102;
            }
        }
    //删除SEO
    public function seodel(){
        header("content-type:text/html;charset=utf-8");
        $id = I('get.id');
        $seo = M("seo"); // 实例化brand表
        $where['id'] = $id;
        if($seo->where($where)->delete()){
            echo "<script>alert('删除成功');location.href='/Admin/Seo/lists'</script>";
        }else{
            echo 0;
        }
    }
    //修改seo
    public function seoUpdate(){
        header("content-type:text/html;charset=utf-8");
        $seoid=I('get.seoid');
        $alias = I('get.alias');
        $title = I('get.title');
        $keywords = I('get.keywords');
        $desc = I('get.desc');
        $seo = M("seo");
        $data['id']=$seoid;
        $data['alias'] = $alias;
        $data['title'] = $title;
        $data['keywords'] = $keywords;
        $data['desc'] = $desc;
        if($seo->save($data)){
            echo 1;
        }else{
            echo 0;
        }
    }
    //修改普通用户
    public function userUpdate(){
        header("content-type:text/html;charset=utf-8");
        $id=I('get.userid');
        $account=I('get.account');
        $username=I('get.username');
        $sex=I('get.sex');
        $telephone=I('get.telephone');
        $email=I('get.email');
        $score=I('get.score');
        $user=M('user');
        $data['id']=$id;
        $data['account']=$account;
        $data['username']=$username;
        $data['sex']=$sex;
        $data['telephone']=$telephone;
        $data['email']=$email;
        $data['score']=$score;
        if($user->save($data)){
            echo 1;
        }else{
            echo 0;
        }

    }

}

?>