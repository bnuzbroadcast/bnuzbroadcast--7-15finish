<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title>活动分页</title>
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
	</head>
	<body>
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
						<li ><a href="<?php echo U('Home/index/index');?>">师大之音</a></li>
						<li><a href="<?php echo U('Home/play/index/id/1');?>">在线收听</a></li>
						<li><a href="<?php echo U('Home/lanmu/index');?>">往期节目</a></li>
						<li><a href="<?php echo U('Home/host/index');?>">校主持队</a></li>
						<li class="active"><a href="<?php echo U('Home/activity/index');?>">品牌活动</a></li>
						<?php echo ($url1); ?>
					</ul>
				</div>
			</div>
		</nav>
		<!-- 活动介绍 --><?php if(is_array($activityselect)): $i = 0; $__LIST__ = $activityselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$activity): $mod = ($i % 2 );++$i;?><div style="background-color: #4d443f;">
			<img src="/bnuzbroadcast/<?php echo ($activity["activitybigpicture"]); ?>" class="img-responsive center-block" style="margin-top: 60px;"/>
		</div>
		<div class="tab10">
			<div class="container">

				<h2 class="tab-h2"><?php echo ($activity["activityname"]); ?></h2>
				<div class="row">
					<div class="col-md-12">
						<div class="media">
							<div class="media-heading">
								<img src="/bnuzbroadcast/<?php echo ($activity["activitysmallpicture"]); ?>" class="img-responsive center-block" alt="" />
							</div>
							<div class="media-body" style="padding-top: 30px;">
								<p class="tab-p" style="text-align: center;"><?php echo ($activity["activityintroduce"]); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 精彩瞬间 -->
		<div class="tab11">
			<div class="container">
				<h2 class="tab-h2" style="margin-bottom: 10px;">O<span style="border-bottom: 1px solid #333;">ur Memorie</span>s</h2>
				<p class="tab-p" style="text-align: center;">精彩瞬间</p>
				<div class="row">
					<div class="col-sm-1">
					</div>					
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto1"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto2"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto3"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto4"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto5"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-1">
					</div>			
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-sm-1">
					</div>					
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto6"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto7"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto8"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto9"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-2">
						<img src="/bnuzbroadcast/<?php echo ($activity["activityphoto10"]); ?>" class="img-responsive center-block"/>
					</div>
					<div class="col-sm-1">
					</div>				
				</div>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<!-- 登陆报名-->

		<div class="tab12">
			<div class="container">
				<h2 class="tab-h2" style="margin-bottom: 30px;color: #666;">报名</h2>
				<form action="<?php echo U('Activity2/join');?>" method="post">
					<div class="row">
						<div class="col-md-12 login">
							<span style="font-size: 18px;color: #666;">报名人</span><input type="text" class="text" name="joinname"  />
						</div>
						<div class="col-md-12 login" style="margin-top: 15px;">
							<span style="font-size: 18px;color: #666;">联系方式</span><input type="text" class="text"name="joinnumber"  />
						</div>
						<div class="col-md-12 login">

							<input type="submit" style="font-size: 24px;width: 190px; height: 45px;border-radius: 50px;color: #666;" value="报名"/>
						</div>
					</div>
				</form>
			</div>
		</div>

			<!--底部-->
		<div class="container">
			<footer>
				<p class="footer-p" style="border-bottom: 5px solid #999;padding-bottom: 30px;">广天下之事·播百家之言</p>
				<p  class="tab-p1" style="text-align: center;color: #666;margin-top: 20px;font-size: 18px;">北京师范大学珠海分校师大之音广播台 版权所有<br />地址：广东省珠海市唐家湾镇金凤路18号北京师范大学珠海分校粤华三栋 邮编：519000</p>
			</footer>
		</div>

		<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
		<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			//轮播自动播放
			$('#myCarousel').carousel({
				//自动4秒播放
				interval: 4000,
			});
			//设置文字垂直居中，谷歌浏览器加载图片的顺序问题，导致高度无法获取
			$(window).load(function() {
				$('.text').eq(0).css('margin-top', ($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 + 'px');
			});
			$(window).resize(function() {
				$('.text').eq(0).css('margin-top', ($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 + 'px');
			});
			$(window).load(function() {
				$('.text').eq(1).css('margin-top', ($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 + 'px');
			});
			$(window).resize(function() {
				$('.text').eq(1).css('margin-top', ($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 + 'px');
			});
		</script>
	</body>
</html>