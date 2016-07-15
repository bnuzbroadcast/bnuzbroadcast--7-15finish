<?php
namespace Admin\Controller;
use Think\Controller;
class HappointmentController extends Controller
{

    public function index(){
        //评论遍历
        $db=M("invite");
        $data=$db->join('t_host ON t_invite.hostid = t_host.hostid')->order('invitetime ')->select();
        $this->assign("data",$data);
        $this->display();
    }
    public function shanchu(){
        //删除评论
        $inviteid=I('inviteid');
        $invite=D('invite');
        $inviteinfo = $invite->where("inviteid ='{$inviteid}'")->delete();
        $invite->delete($inviteinfo);
        $this->assign("jumpUrl",U('Admin/Happointment/index'));
        $this->success('删除成功！');
    }
}