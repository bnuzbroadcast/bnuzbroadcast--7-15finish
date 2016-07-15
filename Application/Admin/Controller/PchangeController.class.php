<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class PchangeController extends Controller
{
    public function index()
{
    //节目遍历
    $db = M('program');
    $select = $db->select();
    $this->assign('programselect', $select);
    $this->show();
}
public function change()
{
    //id遍历
    $id[programid]=$_GET['id'];
    $db = M('program');
    $select = $db->where($id)->select();
    $this->assign('programselect', $select);
    $this->show();
}
    public function upload()
    {//节目修改
        $upload = new Upload(); //实例化上传类
        $upload->maxSize = 10485760;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg','mp3','mp4','wav');// 设置附件上传类型
        $upload->savePath = ''; // 设置附件上传（子）目录
        $info = $upload->upload(); // 上传文件
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            $_POST['programpicture'] = '/Uploads/'.$info[0]['savepath'].$info[0]['savename'];
            $_POST['programcontent'] ='/Uploads/'. $info[1]['savepath'].$info[1]['savename'];
            $this->success('提交成功！');
        }
        $program = D("program");
        $id[programid]=$_POST['programid'];
        $programname=$_POST['programname'];
        $programinstruction=$_POST['programinstruction'];
        $programdate=date('Y-m-d');
        $programpicture=$_POST['programpicture'];
        $programcontent=$_POST['programcontent'];
        $data_arr[programname]=$programname;
        $data_arr[programinstruction]=$programinstruction;
        $data_arr[programdate]=$programdate;
        $data_arr[programpicture]=$programpicture;
        $data_arr[programcontent]=$programcontent;
        $program->create();
        $program->where($id)->save($data_arr);
        // 保存表单数据 包括附件数据
    }
}