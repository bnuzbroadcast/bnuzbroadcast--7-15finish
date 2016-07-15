<?php
namespace Home\Controller;
use Think\Controller;
class SignupController extends Controller {
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
    //注册
    public function register(){
        header("Content-Type:text/html; charset=utf-8");
        //正则
        //限制
        $eamilmode = "/^[0-9a-zA-Z]+@(([0-9a-zA-Z]+)[.])+[a-z]{2,4}$/i";
        $namemode = "/^[0-9a-zA-Z_][\w_]{3,}$/";
        $pwdmode = "/^\w{6,}$/";
        $numbermode = "/^\d{10}$/";
        $phonemode = "/^1[34578]\d{9}$/";
        //上传用户信息
        $user = D("user");
        $username = $_POST['username'];
        $userpassword1 = $_POST['userpassword1'];
        $userpassword2 = $_POST['userpassword2'];
        $userpassword = $_POST['userpassword'];
        $usernumber = $_POST['usernumber'];
        $usermail = $_POST['usermail'];
        $userphone = $_POST['userphone'];
        if($username != '' && $userpassword1 != '' && $userpassword2 != ''  && $usernumber != '' && $usermail != '' && $userphone != ''){
            if($_POST['userpassword1']==$_POST['userpassword2']){
                if(preg_match($namemode, $username)){
                    if (preg_match($pwdmode, $userpassword1)){
                        if(preg_match($eamilmode, $usermail)){
                            if(preg_match($numbermode, $usernumber)){
                                if (preg_match($phonemode, $userphone)){
                                    $user->create();
                                    $user-> add();
                                    $user->where("username ='$username'")->setField('userpassword', md5($userpassword1));
                                    $this->assign("jumpUrl",U('Home/login/index'));
                                    $this->success('注册成功，去登陆吧');
                                }else{
                                    $this->assign("jumpUrl",U('Home/signup/index'));
                                    $this->error('请输入正确的电话号码');
                                }
                            }else{
                                $this->assign("jumpUrl",U('Home/signup/index'));
                                $this->error('请输入正确的学号');
                            }
                        }else{
                            $this->assign("jumpUrl",U('Home/signup/index'));
                            $this->error('请输入正确的邮箱');
                        }
                    }else{
                        $this->assign("jumpUrl",U('Home/signup/index'));
                        $this->error('密码不得少于6位数，请重新输入');
                    }
                }else {
                    $this->assign("jumpUrl",U('Home/signup/index'));
                    $this->error('用户名太短或含有非法字符，请重新输入');
                }
            }else{
                $this->assign("jumpUrl",U('Home/signup/index'));
                $this->error('两次输入密码不一致，请重新输入');
            }
        }else{
             $this->assign("jumpUrl",U('Home/signup/index'));
                $this->error('请输入完整的信息');
        }
    }
}