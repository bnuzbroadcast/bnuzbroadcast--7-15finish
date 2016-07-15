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
                <ul><li><a href="<?php echo U('Admin/Hmessage/index');?>" >主持队信息</a></li>
                    <li><a href="<?php echo U('Admin/Hcomment/index');?>">主持队留言</a></li>
                    <li><a href="<?php echo U('Admin/Happointment/index');?>" >主持队邀约</a></li>
                </ul>
                <li>公告通知</li>
                <ul><li><a href="#" >校园公告</a></li>
                    <li><a href="#" >活动通知</a></li>
                    <li><a href="<?php echo U('Admin/Join/index');?>" >活动报名</a></li>
                </ul>
            </ul>
        </div>
    </div>
    <!--节目修改-->
    <div class="rightadmin">
        <div style="padding-top: 5%">
            <form action="/bnuzbroadcast/index.php/Admin/Pchange2/upload" enctype="multipart/form-data" method="post">
                <div>
                    <div class="row ">
                        <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">主题</span></div>
                        <div class="col-md-6 logtitle">
                            <input type="text" name="programname"  value="" class="log-input2"/>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >介绍</span></div>
                        <div class="col-md-6 logtitle">
                            <textarea id="text" name="programinstruction" class="log-input3 "  rows="6"></textarea>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >图片</span></div>
                        <div class="col-md-6 logtitle">
                            <input type="file" name="programpicture[]"/>
                        </div>
                    </div>
                    <?php if(is_array($programselect)): $i = 0; $__LIST__ = $programselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$program): $mod = ($i % 2 );++$i;?><input type="hidden" id="hid" value="<?php echo ($program["programid"]); ?>" name='programid'><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="row ">
                        <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >音频</span></div>
                        <div class="col-md-6 logtitle">
                            <input type="file" name="programcontent[]"/>
                        </div>
                    </div>

                    <div class="row" style="text-align: right;">
                        <div class="col-md-4 col-md-offset-5">
                            <input type="submit" name="" id="" value="提交" class="log-button"/>
                        </div>
                    </div>
                </div>
            </form></div>
    </div>
</div>
<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
</body>
</html>