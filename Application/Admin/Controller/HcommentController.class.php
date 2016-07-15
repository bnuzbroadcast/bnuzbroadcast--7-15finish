<?php
namespace Admin\Controller;
use Think\Controller;
class HcommentController extends Controller
{
    public function index(){
        //评论遍历
        $db=M("hcomment");
        $data=$db->join('t_user ON t_hcomment.userid = t_user.userid')->join('t_host ON t_hcomment.hostid = t_host.hostid')->select();
        $this->assign("data",$data);
        $this->display();
    }
    //评论删除
    public function shanchu(){
        $hcommentid=I('hcommentid');
        $hcomment=D('hcomment');
        $hcommentinfo = $hcomment->where("hcommentid ='{$hcommentid}'")->delete();
        $hcomment->delete($hcommentinfo);
        $this->assign("jumpUrl",U('Admin/Hcomment/index'));
        $this->success('删除成功！');
    }
}