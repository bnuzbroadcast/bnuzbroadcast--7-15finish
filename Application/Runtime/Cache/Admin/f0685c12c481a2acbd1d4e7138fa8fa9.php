<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
	<style type="text/css">
		.navbar{
			background-color: #f8f8f8;
		}
	</style>
</head>
<!-- 导航 -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="index.html" class="navbar-brand logo"><img src="/bnuzbroadcast/Public/img/logo.png" alt="师大之音"></a>
		</div>
	</div>
</nav>

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
			<ul><li><a href="#" >校园公告</a></li>
				<li><a href="#" >活动通知</a></li>
				<li><a href="<?php echo U('Admin/Join/index');?>" >活动报名</a></li>
			</ul>
		</ul>
	</div>
</div>
<div class="rightadmin">
	<div style="padding-top: 5%">
		<form action="/bnuzbroadcast/index.php/Admin/Hmessage/upload" enctype="multipart/form-data" method="post">
			<div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">主持人姓名</span></div>
				<div class="col-md-6 logtitle">
					<input type="text" name="hostname"  value="" class="log-input2"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">主持人身高</span></div>
				<div class="col-md-6 logtitle">
					<input type="text" name="hostheight"  value="" class="log-input2"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >专业</span></div>
				<div class="col-md-6 logtitle">
					<input type="text" name="hostmarjor"  value="" class="log-input2"/>
				</div>
			</div>
				<div class="row ">
					<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >身份</span></div>
					<div class="col-md-6 logtitle">
						<input type="text" name="hostposition"  value="" class="log-input2"/>
					</div>
				</div>
				<?php if(is_array($hostselect)): $i = 0; $__LIST__ = $hostselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><input type="hidden" id="hid" value="<?php echo ($host["hostid"]); ?>" name='hostid'><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="row ">
					<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >添加照片</span></div>
					<div class="col-md-6 logtitle">
							<input type="file" name="hostbig[]"/>
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
</html>