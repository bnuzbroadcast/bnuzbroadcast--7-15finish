<?php
namespace Home\Controller;
use Think\Controller;
class PlayController extends Controller {
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
        $id[programid]=$_GET['id'];
        $db = M('program');
        $select = $db->where($id)->select();
        $this->assign('programselect',$select);
        //评论遍历
        $db = M('pcomment');
        $id[programid] = $_GET['id'];
        $select = $db->join('t_user ON t_pcomment.userid = t_user.userid')->where($id)->select();
        $this->assign('programcomment', $select);
        $this -> show();
    }
    public function index1(){
        if($_SESSION['username'] != ''){
            $url1 = "<li><a href=".U('Home/User/index').">".$_SESSION['username']."</a></li><li><a href=".U('Index/logout').">".退出."</a></li>";
        }
        else{
            $url1 = "<li><a href=".U('Home/login/index').">".登陆."</a></li><li><a href=".U('Home/signup/index').">".注册."</a></li>";
        }
        $this->assign('url1',$url1);
    
        $this -> show();
    }
    public function index2(){
        if($_SESSION['username'] != ''){
            $url1 = "<li><a href=".U('Home/User/index').">".$_SESSION['username']."</a></li><li><a href=".U('Index/logout').">".退出."</a></li>";
        }
        else{
            $url1 = "<li><a href=".U('Home/login/index').">".登陆."</a></li><li><a href=".U('Home/signup/index').">".注册."</a></li>";
        }
        $this->assign('url1',$url1);
    
        $this -> show();
    }
    public function index3(){
        if($_SESSION['username'] != ''){
            $url1 = "<li><a href=".U('Home/User/index').">".$_SESSION['username']."</a></li><li><a href=".U('Index/logout').">".退出."</a></li>";
        }
        else{
            $url1 = "<li><a href=".U('Home/login/index').">".登陆."</a></li><li><a href=".U('Home/signup/index').">".注册."</a></li>";
        }
        $this->assign('url1',$url1);
    
        $this -> show();
    }
    public function pcomment(){
        //评论上传
        if ($_SESSION['username'] != ''){
        $pcomment = D("pcomment");
        $userid = $_SESSION['userid'];
        $pcommentcontent = $_POST['pcontent'];
        $pcommentdate = date('Y-m-d H:i:s');
        $programid = $_POST['programid'];
        $data_arr[pcommentcontent]=$pcommentcontent;
        $data_arr[pcommentdate]=$pcommentdate;
        $data_arr[userid]=$userid;
        $data_arr[programid] =  $programid;
        $pcomment->create();
        $pcomment-> add($data_arr);
        $this->assign("jumpUrl",U('Home/Lanmu/index'));
        $this->success('评论成功');
        }else{
            $this->assign("jumpUrl",U('Home/login/index'));
            $this->error('请先登陆后再留言');
        }
    }
}