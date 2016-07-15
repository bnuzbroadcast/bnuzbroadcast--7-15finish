<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        //登录
        if($_SESSION['username'] != ''){
            $url1 = "<li><a href=".U('Home/User/index').">".$_SESSION['username']."</a></li><li><a href=".U('Index/logout').">".退出."</a></li>";
        }
        else{
            $url1 = "<li><a href=".U('Home/login/index').">".登陆."</a></li><li><a href=".U('Home/signup/index').">".注册."</a></li>";
        }
        $this->assign('url1',$url1);
        
        $this -> show();
    }
    public function login(){
        //登录
        header("Content-Type:text/html; charset=utf-8");
        $username = $_POST['username'];
        $passwd = md5($_POST['userpassword']);
        $user = D("user");
        $userinfo = $user->where("username ='{$username}'")->find();
        $a=I('username');        
         if(!empty($userinfo)){
            if($userinfo['userpassword'] == $passwd){
                        if($userinfo['usertype']==0){ 
                            $_SESSION['username']=$username;
                            $_SESSION['userid']=$userinfo['userid'];
                            $this->assign("jumpUrl",U('Home/index/index'));
                            $this->success('用户登陆成功，欢迎你');
                        }
                        else if($userinfo['usertype']==1){
                            $_SESSION['username']=$username;
                            $_SESSION['userid']='userid';
                            $this->assign("jumpUrl",U('Home/index/index'));
                            $this->success('主播登陆成功，欢迎你');
                            session_start();
                        }
                        else if($userinfo['usertype']==2){
                            $_SESSION['username']=$username;
                            $_SESSION['userid']='userid';
                            $this->assign("jumpUrl",U('Home/index/index'));
                            $this->success('主编登陆成功，欢迎你');
                            session_start();
                        }
                        else if($userinfo['usertype']==3){
                            $_SESSION['username']=$username;
                            $_SESSION['userid']='userid';
                            $this->assign("jumpUrl","http://localhost/bnuzbroadcast/Admin/index");
                            $this->success('管理员登陆成功，欢迎你','http://localhost/bnuzbroadcast/Admin/index');
                            session_start();
                        }
                        else if($userinfo['usertype']==4){
                            $_SESSION['username']=$username;
                            $_SESSION['userid']='userid';
                            $this->assign("jumpUrl",U('Home/signup/index'));
                            $this->success('该帐号已被封停，请重新注册');
                            session_start();
                        }
    
            }else{
                $this->assign("jumpUrl",U('Home/login/index'));
                $this->error('密码错误，请重新输入');
            }
        }else{
            $this->assign("jumpUrl",U('Home/login/index'));
            $this->error('帐号无效，请先注册帐号');
        }
    }
}