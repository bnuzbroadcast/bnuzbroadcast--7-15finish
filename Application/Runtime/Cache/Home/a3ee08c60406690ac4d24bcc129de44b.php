<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title>注册</title>
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
	</head>
	<body style="background-color: #ecebeb;">
		<!-- 导航 -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="<?php echo U('Home/index/index');?>" class="navbar-brand logo"><img src="/bnuzbroadcast/Public/img/logo.png" alt="师大之音"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" style="border: none;">
						<img src="/bnuzbroadcast/Public/img/menu-icon.png" alt="" />
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo U('Home/index/index');?>">师大之音</a></li>
						<li><a href="<?php echo U('Home/play/index');?>">在线收听</a></li>
						<li><a href="<?php echo U('Home/lanmu/index');?>">往期节目</a></li>
						<li><a href="<?php echo U('Home/host/index');?>">校主持队</a></li>
						<li><a href="<?php echo U('Home/activity/index');?>">品牌活动</a></li>
						<!-- <li><a href="<?php echo U('Home/login/index');?>">登陆</a></li>
						<li  class="active"><a href="<?php echo U('Home/signup/index');?>">注册</a></li> -->
						<?php echo ($url1); ?>
					</ul>
				</div>
			</div>
		</nav>
	<div class="log">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<img src="/bnuzbroadcast/Public/img/logo.png" style="margin-left: 4%;"/>
					<span class="tab-h2" style="margin-left: 2%;text-align: left;">BNUZ BROADCAST STATION</span>
				</div>
			</div>
			<div class="row" style="margin-top: 35px;">
				<div class="col-md-8 col-md-offset-2">
				<form action="<?php echo U('Signup/register');?>" method="post">
					<div class="log-broad">
						<div class="row "  style="margin-top: 20px;">
							<div class="col-md-6 col-md-offset-1 logtitle"  style="margin-top: 30px;"> 
								<span class="tab-h3">用户注册</span>
							</div>
						</div>
						<div class="row ">
							<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">昵 称</span></div>
							<div class="col-md-6 logtitle">
								<input type="text" name="username"  value="" class="log-input"/>
							</div>
						</div>
						<div class="row ">
							<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">密 码</span></div>
							<div class="col-md-6 logtitle">
								<input type="password" name="userpassword1"  value="" class="log-input"/>
							</div>
						</div>
						<div class="row ">
							<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >密码 确认</span></div>
							<div class="col-md-6 logtitle">
								<input type="password" name="userpassword2"  value="" class="log-input"/>
							</div>
						</div>
						<div class="row ">
							<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">学 号</span></div>
							<div class="col-md-6 logtitle">
								<input type="text" name="usernumber"  value="" class="log-input"/>
							</div>
						</div>
						<div class="row ">
							<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">邮 箱</span></div>
							<div class="col-md-6 logtitle">
								<input type="text" name="usermail"  value="" class="log-input"/>
							</div>
						</div>
						<div class="row ">
							<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">电 话</span></div>
							<div class="col-md-6 logtitle">
								<input type="text" name="userphone"  value="" class="log-input"/>
							</div>
						</div>
						<div class="row" style="text-align: right;">
							<div class="col-md-4 col-md-offset-5">
								<input type="submit" name="" id="" value="注册" class="log-button"/>
								<input type="button" name="" id="" value="登陆" class="log-button"/>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="log-bottom"></div>
				</div>
			</div>
			</div>
		</div>
	</div>

		<!--底部-->
		<div class="container">
			<footer>
				<p class="footer-p" style="border-bottom: 5px solid #999;padding-bottom: 30px;">广天下之事·播百家之言</p>
				<p class="footer-p1" style="text-align: center;color: #666;margin-top: 20px;">北京师范大学珠海分校师大之音广播台 版权所有<br />地址：广东省珠海市唐家湾镇金凤路18号北京师范大学珠海分校粤华三栋 邮编：519000</p>
			</footer>
		</div>

		<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
		<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
	</body>
</html>