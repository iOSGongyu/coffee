<?php

namespace Admin\Controller;

use Think\Controller;
class OrderController extends CommonController {
    public function lists(){
        if(checkLogin()){
            $assignArr = array(
                "leftOrderManager" => 1,//是否选中
                "leftOrder" => 1,//是否选中
            );
            $role=I('session.role');
            $order=M('order');
            $records=I('cookie.records');
            if($records == ''){
                $records =10;
            }
            $search=I('post.search');
            if($role == 0){
                if($search==''){
                    $count = $order->table('sucai_order o')->join('sucai_package p ON o.packageid=p.id')->join('sucai_user u ON o.userid=u.id')->join('LEFT JOIN sucai_agent a ON o.agentId=a.id')->count();// 查询满足要求的总记录数
                    $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                    $show = $Page->show();// 分页显示输出
                    $order->create();
                    $data3=$order->table('sucai_order o')->join('sucai_package p ON o.packageid=p.id')->join('sucai_user u ON o.userid=u.id')->join('LEFT JOIN sucai_agent a ON o.agentId=a.id')->field('o.id,o.orderno,o.adtypeid,o.ordername,o.location,o.remark,o.createtime,o.status,p.packagename,p.price,u.account,o.agentid,a.agentname')->limit($Page->firstRow.','.$Page->listRows)->select();
                }else{
                    $data3=$order->where("regional like '%{$search}%' || location like '%{$search}%' || ordername like '%{$search}%' || orderno like '%{$search}%' ")->select();
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
                $count = $order->table('sucai_order o')->join('sucai_package p ON o.packageid=p.id')->join('sucai_user u ON o.userid=u.id')->join('LEFT JOIN sucai_agent a ON o.agentId=a.id')->where("o.regional = '{$role}'")->count();// 查询满足要求的总记录数
                $Page = new  \Think\Page($count,$records);// 实例化分页类 传入总记录数和每页显示的记录数(10)
                $show = $Page->show();// 分页显示输出
                $order->create();
                $data3=$order->table('sucai_order o')->join('sucai_package p ON o.packageid=p.id')->join('sucai_user u ON o.userid=u.id')->join('LEFT JOIN sucai_agent a ON o.agentId=a.id')->where("o.regional = '{$role}'")->field('o.id,o.orderno,o.adtypeid,o.ordername,o.location,o.remark,o.createtime,o.status,p.packagename,p.price,u.account,o.agentid,a.agentname')->limit($Page->firstRow.','.$Page->listRows)->select();

            }

            $this->assign('value',$usersearch);

            $this->assign('orderList',$data3);
            $this->assign('num',$Page->listRows);
            $this->assign('count',$count);
            $this->assign('page',$show);// 赋值分页输出
            $this->assign($assignArr);
            $this->display();
        }

    }
    public function updateOrder(){
        if(checkLogin()){
            $assignArr = array(
                "leftOrderManager" => 1,//是否选中
                "leftOrder" => 1,//是否选中
            );
            $role=I('session.role');
            $orderId=I('get.id');
            $order=M('order');
            $agent=M('agent');
            if($role == 0){
                $agentList=$agent->field('id,agentname')->select();

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
                $agentList=$agent->where("regional = '{$role}'")->field('id,agentname')->select();
            }
            $orderNo=$order->where("id = {$orderId}")->field('id,orderNo,status')->select();

            $this->assign('orderNo',$orderNo);
            $this->assign('agentList',$agentList);

            $this->assign($assignArr);
            $this->display();
        }
    }
}