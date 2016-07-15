<?php
namespace Home\Controller;
use Think\Controller;
class Host2Controller extends Controller
{
    public function index()
    {  
        //登陆session
        if ($_SESSION['username'] != '') {
        $url1 = "<li><a href=" . U('Home/User/index') . ">" . $_SESSION['username'] . "</a></li><li><a href=" . U('Index/logout') . ">" . 退出 . "</a></li>";
    } else {
        $url1 = "<li><a href=" . U('Home/login/index') . ">" . 登陆 . "</a></li><li><a href=" . U('Home/signup/index') . ">" . 注册 . "</a></li>";
    }
        $this->assign('url1', $url1);
        //主持人列表
        $db = M('host');
        $select = $db->select();
        $this->assign('hostlist', $select);
        //被选择的主持人
        $id[hostid] = $_GET['id'];
        $db = M('host');
        $select = $db->where($id)->select();
        $this->assign('hostselect', $select);
       //评论显示
        $db = M('hcomment');
        $id[hostid] = $_GET['id'];
        $select = $db->join('t_user ON t_hcomment.userid = t_user.userid')->where($id)->select();
        $this->assign('hostcomment', $select);
        //显示
        $this->show();
    }
    public function hcomment()
    {
         //评论上传
         if ($_SESSION['username'] != '') {
            $hcomment = D("hcomment");
            $hcommentcontent = $_POST['hcontent'];
            $hcommentdate = date('Y-m-d H:i:s');
            $userid = $_SESSION['userid'];
            $hostid = $_POST['hostid'];
            $data_arr[hcommentcontent] = $hcommentcontent;
            $data_arr[hcommentdate] = $hcommentdate;
            $data_arr[hostid] =  $hostid;
            $data_arr[userid]=$userid;
            $hcomment->create();
            $hcomment->add($data_arr);
            $this->success('评论成功');
         }else{
             $this->assign("jumpUrl",U('Home/login/index'));
             $this->error('请先登陆后再留言');
         }
    }
    public  function appointment(){
        //被邀约的主持人
        $id[hostid] = $_GET['id'];
        $db = M('host');
        $select = $db->where($id)->select();
        $this->assign('hostselect', $select);
        $this->show();
    }
    public function appoint(){
        if ($_SESSION['username'] != '') {
            $invite = D("invite");
            $invitename = $_POST['invitename'];
            $invitenumber = $_POST['invitenumber'];
            $invitemain = $_POST['invitemain'];
            $invitetime = $_POST['invitetime'];
            $inviteplace = $_POST['inviteplace'];
            $invitecontent = $_POST['invitecontent'];
            $hostid = $_POST['hostid'];
            $data_arr[invitename] = $invitename;
            $data_arr[invitenumber] = $invitenumber;
            $data_arr[invitemain] =  $invitemain;
            $data_arr[invitetime]=$invitetime;
            $data_arr[inviteplace]=$inviteplace;
            $data_arr[invitecontent]=$invitecontent;
            $data_arr[hostid]=$hostid;
            $invite->create();
            $invite->add($data_arr);
            // $this->assign("jumpUrl",U('Home/Team/index'))
            $this->success('邀约成功');
        }else{
            $this->assign("jumpUrl",U('Home/Index/index'));
            $this->error('请先登陆后再留言');
        }
    }

    
}