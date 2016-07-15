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

	<div style="padding-top: 5%">
		<form action="<?php echo U('Host2/appoint');?>"  method="post">
			<div><?php if(is_array($hostselect)): $i = 0; $__LIST__ = $hostselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><div class="row" style="text-align:center;">
				<img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>" class="team4 img-responsive center-block"/>
				<br />
				<p class="tab-h3"><?php echo ($host["hostname"]); ?></p>
				<br />
			</div>
					<input type="hidden" id="hid" value="<?php echo ($host["hostid"]); ?>" name='hostid'><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">邀请人</span></div>
				<div class="col-md-6 logtitle">
					<input type="text" name="invitename"  value="" class="log-input2"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">联系方式</span></div>
				<div class="col-md-6 logtitle">
					<input type="text" name="invitenumber"  value="" class="log-input2"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">具体活动</span></div>
				<div class="col-md-6 logtitle">
					<input type="text" name="invitemain"  value="" class="log-input2"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">活动时间</span></div>
				<div class="col-md-6 logtitle">
					<input type="text" name="invitetime"  value="书写格式：20160101" class="log-input2" />
				</div>
			</div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">活动地点</span></div>
				<div class="col-md-6 logtitle">
					<input type="text" name="inviteplace"  value="" class="log-input2"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >活动内容</span></div>
				<div class="col-md-6 logtitle">
					<textarea id="text" name="invitecontent" class="log-input3 "  rows="6"></textarea>
				</div>
			</div>

			
				<div class="row" style="text-align: right;">
					<div class="col-md-4 col-md-offset-5">
						<input type="submit"  value="提交" class="log-button"/>
					</div>
				</div>
	</div>
		</form></div>

</div>
</html>