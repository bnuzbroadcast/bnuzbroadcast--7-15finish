<?php
namespace Admin\Controller;
use Think\Controller;
class JoinController extends Controller
{
    public function index(){
        $db=M("join");
        $data=$db->order('joindate desc')->select();
        $this->assign("data",$data);
        $this->display();
    }
    public function shanchu(){
        //删除评论
        $joinid=I('joinid');
        $join=D('join');
        $joininfo = $join>where("joinid ='{$joinid}'")->delete();
        $join->delete($joininfo);
        $this->assign("jumpUrl",U('Admin/Join/index'));
        $this->success('删除成功！');
    }
}