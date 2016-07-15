<?php
namespace Home\Controller;
use Think\Controller;
class Activity2Controller extends Controller {
    public function index(){
        //登录
         if($_SESSION['username'] != ''){
            $url1 = "<li><a href=".U('Home/User/index').">".$_SESSION['username']."</a></li><li><a href=".U('Index/logout').">".退出."</a></li>";
        }
        else{
            $url1 = "<li><a href=".U('Home/login/index').">".登陆."</a></li><li><a href=".U('Home/signup/index').">".注册."</a></li>";
        }
        $this->assign('url1',$url1);
        //活动详情
        $id[activityid]=$_GET['id'];
        $db = M('activity');
        $select = $db->where($id)->select();
        $this->assign('activityselect',$select);
 
         $this -> show();
    }
    public function join(){
        if ($_SESSION['username'] != '') {
            $join = D("join");
            $joinname = $_POST['joinname'];
            $joinnumber = $_POST['joinnumber'];
            $activityid = $_POST['activityid '];
            $userid =$_SESSION['userid'];
            $joindate = date('Y-m-d H:i:s');
            $data_arr[joinname] = $joinname;
            $data_arr[joinnumber] = $joinnumber;
            $data_arr[userid] =  $userid;
            $data_arr[activityid ] =  $activityid ;
            $data_arr[joindate] =  $joindate ;
            $join->create();
            $join->add($data_arr);
            // $this->assign("jumpUrl",U('Home/Team/index'))
            $this->success('报名成功');
        }else{
            $this->assign("jumpUrl",U('Home/Index/index'));
            $this->error('请先登陆后再留言');
        }
    }
}