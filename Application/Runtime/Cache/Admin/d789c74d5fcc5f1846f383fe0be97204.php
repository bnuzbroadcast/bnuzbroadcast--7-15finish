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
			<ul>
				<li><a href="<?php echo U('Admin/Join/index');?>" >活动报名</a></li>
			</ul>
		</ul>
	</div>
</div>
<div class="rightadmin">
	<div style="padding-top: 5%">
		<table class="simpletable">
			<tr class="tableleading">
				<td>邀请主持人</td>
				<td>邀请人</td>
				<td>联系方式</td>
				<td>具体活动</td>
				<td>时间</td>
				<td>地点</td>
				<td>活动</td>
				<td>删除邀请</td>
			</tr>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($vo["hostname"]); ?></td>
					<td><?php echo ($vo["invitename"]); ?></td>
					<td><?php echo ($vo["invitenumber"]); ?></td>
					<td><?php echo ($vo["invitemain"]); ?></td>
					<td><?php echo ($vo["invitetime"]); ?></td>
					<td><?php echo ($vo["inviteplace"]); ?></td>
					<td><?php echo ($vo["invitecontent"]); ?></td>
					<td><a href="/bnuzbroadcast/index.php/Admin/Happointment/shanchu/inviteid/<?php echo ($vo["inviteid"]); ?>" onclick="return confirm('您确定要删除该邀请吗？')">删除</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
				</div>
			</div>
	</div>
</html>