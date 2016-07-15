<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
use Think\Upload;
class UserController extends Controller {
    public function index(){
        //节目遍历
        $program = M('program');
        $select = $program->select();
        $this->assign('select',$select);
        //个人信息遍历
        $id[userid]=$_SESSION['userid'];
        $user = M('user');
        $select = $user->where($id)->select();
        $this->assign('select',$select);
        //登录
        if($_SESSION['username'] != ''){
            $url1 = "<li><a href=".U('Home/User/index').">".$_SESSION['username']."</a></li><li><a href=".U('Index/logout').">".退出."</a></li>";
        }
        else{
            $url1 = "<li><a href=".U('Home/login/index').">".登陆."</a></li><li><a href=".U('Home/signup/index').">".注册."</a></li>";
        }
        $this->assign('url1',$url1);

        $this->show();
    }
    //个人界面的节目收听
    public function program(){
        //节目遍历
        $program = M('program');
        $select = $program->select();
        $this->assign('select',$select);
        $this->display();
    }
    //更改用户信息
    public function upload()
    {
        //实例化上传类
        $upload = new Upload();
        $upload->maxSize = 10485760;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath = ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            $_POST['userpicture'] = '/Uploads/'.$info[0]['savepath'].$info[0]['savename'];
            $this->success('提交成功！');

        }
        $id[userid]=$_SESSION['userid'];
        $user = D("user");
        $username=$_POST['username'];
        $userpassword=md5($_POST['userpassword']);
        $usernumber=$_POST['usernumber'];
        $usermail=$_POST['usermail'];
        $userphone=$_POST['userphone'];
        $userinstruction=$_POST['userinstruction'];
        $userpicture=$_POST['userpicture'];
        $data_arr[username]=$username;
        $data_arr[userpassword]=$userpassword;
        $data_arr[usernumber]=$usernumber;
        $data_arr[usermail]=$usermail;
        $data_arr[userphone]=$userphone;
        $data_arr[userinstruction]=$userinstruction;
        $data_arr[userpicture]=$userpicture;
        $user->create();
        $user->where($id)->save($data_arr);
        // 保存表单数据 包括附件数据
    }
    public function message(){
        //用户信息
        $id[userid]=$_SESSION['userid'];
        $db = M('user');
        $select = $db->where($id)->select();
        $this->assign('select',$select);
        //登录
        if($_SESSION['username'] != ''){
            $url1 = "<li><a href=".U('Home/User/index').">".$_SESSION['username']."</a></li><li><a href=".U('Index/logout').">".退出."</a></li>";
        }
        else{
            $url1 = "<li><a href=".U('Home/login/index').">".登陆."</a></li><li><a href=".U('Home/signup/index').">".注册."</a></li>";
        }
        $this->assign('url1',$url1);

        $this->display();
    }
}