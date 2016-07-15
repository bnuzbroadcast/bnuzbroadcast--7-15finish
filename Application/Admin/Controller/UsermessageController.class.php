<?php
namespace Admin\Controller;
use Think\Controller;
class UsermessageController extends Controller
{
    public function index(){
        //用户信息遍历
        $db=M("user");
        $data=$db->select();
        $this->assign("data",$data);
        $this->display();
    }
    
    public function fenghao(){
        //封号
        $userid=I('userid');
        $user=D('user');
        $userinfo = $user->where("userid ='{$userid}'")->find();
        $userinfo['usertype']='4';
        $user->save($userinfo);
        $this->assign("jumpUrl",U('Admin/Usermessage/index'));
        $this->success('封号成功！');
    }
    public function jiefeng(){
        //解封
        $userid=I('userid');
        $user=D('user');
        $userinfo = $user->where("userid ='{$userid}'")->find();
        $userinfo['usertype']='0';
        $user->save($userinfo);
        $this->assign("jumpUrl",U('Admin/Usermessage/index'));
        $this->success('解封成功！');
    }
    public function shengji(){
        //升级为管理员
        $userid=I('userid');
        $user=D('user');
        $userinfo = $user->where("userid ='{$userid}'")->find();
        $userinfo['usertype']='3';
        $user->save($userinfo);
        $this->assign("jumpUrl",U('Admin/Usermessage/index'));
        $this->success('升为管理员成功！');
    }
    public function jiangji(){
        //成为普通用户
        $userid=I('userid');
        $user=D('user');
        $userinfo = $user->where("userid ='{$userid}'")->find();
        $userinfo['usertype']='0';
        $user->save($userinfo);
        $this->assign("jumpUrl",U('Admin/Usermessage/index'));
        $this->success('成为普通用户成功！');
    }
    
}