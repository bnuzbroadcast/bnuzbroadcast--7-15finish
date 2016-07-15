<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
class HmessageController extends Controller
{
    public function index(){
        //主持人信息遍历
//        $db = M('host');
//        $select = $db->select();
//        $this->assign('hostselect', $select);
////        $this->show();
//        $db = M('host'); // 实例化User对象
//       // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
//        $list = $db->page($_GET['p'].',4')->select();
//        $this->assign('hostselect',$list);// 赋值数据集
//        $count      = $db->count();// 查询满足要求的总记录数
//        $Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数
//        $show       = $Page->show();// 分页显示输出
//        $this->assign('page',$show);// 赋值分页输出
//        $this->show(); // 输出模板
        $host = M('host'); // 实例化User对象
        $count      = $host->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $host->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('hostselect',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    public function hostchange()
    {
        //id遍历
        $id[hostid]=$_GET['id'];
        $db = M('host');
        $select = $db->where($id)->select();
        $this->assign('hostselect', $select);
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
            $_POST['hostbig'] = '/Uploads/'.$info[0]['savepath'].$info[0]['savename'];
            $this->success('提交成功！');
        }
        $host = D("host");
        $id[hostid]=$_POST['hostid'];
        $hostname=$_POST['hostname'];
        $hostheight=$_POST['hostheight'];
        $hostmarjor=$_POST['hostmarjor'];
        $hostposition=$_POST['hostposition'];
        $hostbig=$_POST['hostbig'];
        $data_arr[hostname]=$hostname;
        $data_arr[hostheight]=$hostheight;
        $data_arr[hostmarjor]=$hostmarjor;
        $data_arr[hostposition]=$hostposition;
        $data_arr[hostbig]=$hostbig;
        $host->create();
        $host->where($id)->save($data_arr);
        // 保存表单数据 包括附件数据
    }

}