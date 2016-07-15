<?php
namespace Admin\Controller;
use Think\Controller;
class PcommentController extends Controller
{
    public function index(){
        //评论遍历
        $db=M("pcomment");
        $data=$db->join('t_user ON t_pcomment.userid = t_user.userid')->join('t_program ON t_pcomment.programid = t_program.programid')->select();
        $this->assign("data",$data);
        $this->display();
    }
    public function shanchu(){
        //删除评论
        $pcommentid=I('pcommentid');
        $pcomment=D('pcomment');
        $pcommentinfo = $pcomment->where("pcommentid ='{$pcommentid}'")->delete();
        $pcomment->delete($pcommentinfo);
        $this->assign("jumpUrl",U('Admin/Pcomment/index'));
        $this->success('删除成功！');
    }
}