<?php
namespace Home\Controller;
use Think\Controller;
class LanmuController extends Controller {
    public function index(){
        //登录
         if($_SESSION['username'] != ''){
            $url1 = "<li><a href=".U('Home/User/index').">".$_SESSION['username']."</a></li><li><a href=".U('Index/logout').">".退出."</a></li>";
        }
        else{
            $url1 = "<li><a href=".U('Home/login/index').">".登陆."</a></li><li><a href=".U('Home/signup/index').">".注册."</a></li>";
        }
        $this->assign('url1',$url1);
        //节目遍历
        $db = M('program');
        $select = $db->select();
        $this->assign('select',$select);
        $this -> show();
    }
}