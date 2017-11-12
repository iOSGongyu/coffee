<?php

namespace Admin\Controller;

use Think\Controller;

class UserController extends CommonController {

    public function index() {
        if(checkLogin()){
            $assignArr = array(
                "leftSadebarActive" => 1,//是否选中
            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $this->assign($assignArr);
                $this->display();
            }
        }
    }
    /**
     *普通用户列表
     */
    public function commonUserList(){
        if(checkLogin()){
            $assignArr = array(
                "leftUsersManager" => 1,//是否选中
                "leftUsers" => 1,//是否选中
                "commonUserList" => 1,//菜单列表是否选中

            );
            $role=I('session.role');

            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $commonUserModel = M("user");
                $records=I('cookie.records');
                if($records == ''){
                    $records =10;
                }
                $search=I('post.search');
//                var_dump($search);

                if($search==''){
                $count = $commonUserModel->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $commonUserModel->create();

                $data3 = $commonUserModel->limit($Page->firstRow.','.$Page->listRows)->select();
                }else{
                    $data3 = $commonUserModel->where("account like '%{$search}%' ")->limit($Page->firstRow.','.$Page->listRows)->select();

                }


                $this->assign('userList',$data3);
                $this->assign('num',$Page->listRows);
                $this->assign('count',$count);
                $this->assign('page',$show);// 赋值分页输出
                $this->assign($assignArr);
                $this->display();
            }
        }
    }
    /**
     *代理商列表
     */
    public function agentUserList(){
        if(checkLogin()){
            $assignArr = array(
                "leftUsersManager" => 1,//是否选中
                "leftUsers" => 1,//是否选中
                "leftAgentUserList" => 1,//菜单列表是否选中
            );
                $role=I('session.role');
                $agent=M('agent');
                $records=I('cookie.records');
                if($records == ''){
                    $records =10;
                }
                $search=I('post.search');
    //                var_dump($search);
                if($role == 0){
                    if($search==''){
                        $count = $agent->count();// 查询满足要求的总记录数
                        $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                        $show = $Page->show();// 分页显示输出
                        $agent->create();
                        $data3=$agent->limit($Page->firstRow.','.$Page->listRows)->select();
                    }else{
                        $data3=$agent->where("regional like '%{$search}%' || agentname like '%{$search}%' || wechat like '%{$search}%' || wechatSlogan like '%{$search}%' || realname like '%{$search}%'")->limit($Page->firstRow.','.$Page->listRows)->select();

                    }
                }else{
                if($role == 1){
                    $role='直辖市';
                }elseif($role == 2){
                    $role ='华东';
                }elseif($role == 3){
                    $role='华南';
                }elseif($role == 4){
                    $role ='华北';
                }elseif($role == 5){
                    $role ='东北';
                }elseif($role == 6){
                    $role ='西南';
                }elseif($role == 7){
                    $role ='西北';

                }else{
                    $role ='其他';
                }
                $count = $agent->where("regional ='{$role}'")->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $agent->create();
                $data3=$agent->where("regional ='{$role}'")->limit($Page->firstRow.','.$Page->listRows)->select();
            }


            $this->assign('agentList',$data3);
            $this->assign('num',$Page->listRows);
            $this->assign('count',$count);
            $this->assign('page',$show);// 赋值分页输出
            $this->assign($assignArr);
            $this->display();


        }
    }
    //代理商删除
    public function agentdel(){
        $role=I('session.role');
        if($role != 0){
            echo"<script>alert('您没有权限')</script>";
            echo "<script>location.href= '../Index/index'</script>";
        }else{
            $agent = M("agent");
            $id=I('get.id');
            if($agent->delete($id) > 0){
                echo "<script>alert('删除成功')</script>";
                echo "<script>location.href='agentUserList'</script>";
            }else{
                echo "<script>alert('error')</script>";
                echo "<script>history.back()</script>";
            }
        }
    }
    //普通用户删除
    public function commondel(){
        $role=I('session.role');
        if($role != 0){
            echo"<script>alert('您没有权限')</script>";
            echo "<script>location.href= '../Index/index'</script>";
        }else{
            $user = M("user");
            $id=I('get.id');
            if($user->delete($id) > 0){
                echo "<script>alert('删除成功')</script>";
                echo "<script>location.href='commonUserList'</script>";
            }else{
                echo "<script>alert('error')</script>";
                echo "<script>history.back()</script>";
            }
        }
    }
    //普通用户更新
    public function commonUpdate(){
        $id = I('get.id');
        $user = M('user');
        $where['id']=$id;
        $userDetail=$user->where($where)->field('id,account,username,sex,telephone,email,location,score')->select();
        $this->assign('userDetail',$userDetail);
        $this->display();
    }
    //邀请码列表
    public function invitationLists(){
        if(checkLogin()){
            $assignArr = array(
                "leftUsersManager" => 1,//是否选中
                "leftUsers" => 1,//是否选中
                "expand" => 1,//拓展列表是否选中
                "leftInvitationLists" => 1,//菜单列表是否选中

            );
            $role=I('session.role');
            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $invitation=M('invitationcode');
                $records=I('cookie.records');
                if($records == ''){
                    $records =10;
                }
                $search=I('post.search');
//                var_dump($search);

                if($search==''){

                $count = $invitation->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $invitation->create();
                $data3=$invitation->limit($Page->firstRow.','.$Page->listRows)->select();
                }else{
                    $data3=$invitation->where("invitation_code like '%{$search}%' || status like '%{$search}%'")->limit($Page->firstRow.','.$Page->listRows)->select();

                }
                $this->assign('invitationLists',$data3);
                $this->assign('num',$Page->listRows);
                $this->assign('count',$count);
                $this->assign('page',$show);// 赋值分页输出
                $this->assign($assignArr);
                $this->display();
            }
        }
    }

    //邀请码添加
    public function invitationAdd(){
        if(checkLogin()){
            $assignArr = array(
                "leftUsersManager" => 1,//是否选中
                "leftUsers" => 1,//是否选中
                "expand" => 1,//拓展列表是否选中
                "leftInvitationAdd" => 1,//菜单列表是否选中

            );
            $role=I('session.role');

            if($role != 0){
                echo"<script>alert('您没有权限')</script>";
                echo "<script>location.href= '../Index/index'</script>";
            }else{
                $this->assign($assignArr);
                $this->display();
            }
        }
    }
    //普通用户删除
    public function invitationdel(){
        $role=I('session.role');
        if($role != 0){
            echo"<script>alert('您没有权限')</script>";
            echo "<script>location.href= '../Index/index'</script>";
        }else{
            $invitationcode = M("invitationcode");
            $id=I('get.id');
            if($invitationcode->delete($id) > 0){
                echo "<script>alert('删除成功')</script>";
                echo "<script>location.href='invitationLists'</script>";
            }else{
                echo "<script>alert('error')</script>";
                echo "<script>history.back()</script>";
            }
        }
    }
    //Upload Excel File 导入数据库
    public function  uploadExcelFile (){
        require(THINK_PATH.'Library/Vendor/PHPExcels/PHPExcel.php');//引入PHP EXCEL类
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('xls', 'xlsx');// 设置附件上传类型
        $upload->rootPath  =     'Public/UploadsExcel/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveRule = uniqid;
        // 上传文件
        $info   =   $upload->upload($_FILES);
        /*判别是不是.xls文件，判别是不是excel文件*/
        if($info){
            $filePath = 'Public/'.'UploadsExcel/'.$info['file_stu']['savepath'].$info['file_stu']['savename'];//Excel文件路径
            $sheet = 0;//默认表格
            if(empty($filePath) or !file_exists($filePath)){die('file not exists');}
            $PHPReader = new \PHPExcel_Reader_Excel2007();        //建立reader对象
            if(!$PHPReader->canRead($filePath)){
                $PHPReader = new \PHPExcel_Reader_Excel5();
                if(!$PHPReader->canRead($filePath)){
                    echo 'no Excel';
                    return ;
                }
            }
            $PHPExcel = $PHPReader->load($filePath);        //建立excel对象
            $currentSheet = $PHPExcel->getSheet($sheet);        //**读取excel文件中的指定工作表*/
            $allColumn = $currentSheet->getHighestColumn();        //**取得最大的列号*/
            $allRow = $currentSheet->getHighestRow();        //**取得一共有多少行*/
            $excelData = array();
            for($rowIndex=1;$rowIndex<=$allRow;$rowIndex++){        //循环读取每个单元格的内容。注意行从1开始，列从A开始
                for($colIndex='A';$colIndex<=$allColumn;$colIndex++){
                    $addr = $colIndex.$rowIndex;
                    $cell = $currentSheet->getCell($addr)->getValue();
                    if($cell instanceof \PHPExcel_RichText){ //富文本转换字符串
                        $cell = $cell->__toString();
                    }
                    $excelData[$rowIndex][$colIndex] = $cell;
                }
            }
            $invitationcodeModel = M('invitationcode');
            foreach($excelData as $v ){
                $data['invitation_code'] = $v['B'];
                $data['id'] = null;
                $data['status'] = 0;
                $data['create_time'] = time();
                $result = $invitationcodeModel->data($data)->add();
                $insertId = $result;
            }
            if($insertId){
                echo "<script>alert('插入成功');location.href='/Admin/User/invitationLists';</script>";
            }else{
                echo "<script>alert('插入失败，请检查文件是否按照要求的格式');</script>";
            }
        }else{
            echo "<script>alert('上传失败');location.href='/Admin/User/invitationLists';</script>";exit;
        }

    }
    //导出Excel文件
    public function excelExport(){
        require_once(THINK_PATH.'Library/Vendor/PHPExcels/PHPExcel.php');//引入PHP EXCEL类
        require_once(THINK_PATH.'Library/Vendor/PHPExcels/IOFactory.php');//引入PHP EXCEL类
        $objPHPExcel = new \PHPExcel();
        $invitationcodeModel = M('invitationcode');
        $invitationcodeList=$invitationcodeModel->select();
        //设置excel列名
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1','id');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1','invitation_code');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1','status');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1','create_time');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1','modify_time');
        //把数据循环写入excel中
        foreach($invitationcodeList as $key => $value){
            $key+=2;
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$key,$value['id']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$key,$value['invitation_code']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$key,$value['status']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$key,date('Y-m-d H:i:s',$value['create_time']));
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$key,date('Y-m-d H:i:s',$value['modify_time']));
        }
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('邀请码');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="邀请码列表.xls"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }
}


