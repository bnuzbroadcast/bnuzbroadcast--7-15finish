<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
</head>
<body>
<!-- 导航 -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand logo"><img src="/bnuzbroadcast/Public/img/logo.png" alt="师大之音"></a>
        </div>
    </div>
</nav>
<!--目录-->
<div class="concainer">
    <div class="leftadmin">
        <div style="padding-left: 20%;padding-top: 10%">
            <ul class="admin-ul" id="Myul">
                <li>节目</li>
                <ul><li><a href="<?php echo U('Admin/Index/index');?>" >节目上传</a></li>
                    <li><a href="<?php echo U('Admin/Pchange/index');?>" >节目修改</a></li>
                    <li><a href="<?php echo U('Admin/Pcomment/index');?>" >节目留言</a></li>
                </ul>
                <li>用户管理</li>
                <ul><li><a href="<?php echo U('Admin/Usermessage/index');?>" >用户信息</a></li>
                </ul>
                <li>主持队活动</li>
                <ul><li><a href="../Hmessage/index/p/1" >主持队信息</a></li>
                    <li><a href="<?php echo U('Admin/Hcomment/index');?>">主持队留言</a></li>
                    <li><a href="<?php echo U('Admin/Happointment/index');?>" >主持队邀约</a></li>
                </ul>
                <li>公告通知</li>
                <ul>
                    <li><a href="<?php echo U('Admin/Join/index');?>" >活动报名</a></li>
                </ul>
            </ul>
        </div>
    </div>
<!--节目修改-->
    <div class="rightadmin">
        <div style="padding: 5%">
            <table class="simpletable" >
                <tr class="tableleading"><td width="50px">节目id</td><td width="50px" >节目名</td><td width="60px">节目时间</td><td >节目介绍</td><td width="50px">节目图片</td><td width="50px">修改</td></tr>
                 <?php if(is_array($programselect)): $i = 0; $__LIST__ = $programselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$program): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($program["programid"]); ?></td><td><?php echo ($program["programname"]); ?></td><td><?php echo ($program["programdate"]); ?></td><td><?php echo ($program["programinstruction"]); ?></td><td><img src="/bnuzbroadcast/<?php echo ($program["programpicture"]); ?>" width="100px" height="100px" alt="" /></td><td><a href="change/id/<?php echo ($program["programid"]); ?>">修改</a> </td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
        </div>
    </div>
</div>
<script>
    audiojs.events.ready(function() {
        var as = audiojs.createAll();
    });
</script>
<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
</body>
</html>