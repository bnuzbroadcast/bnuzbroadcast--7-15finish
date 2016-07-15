<?php
namespace  Home\Model;
use Think\Model;
class UserModel extends Model{
    protected $_validate = array(
        array('userName','require','用户名不得为空',0,'regex',3),
    );
}