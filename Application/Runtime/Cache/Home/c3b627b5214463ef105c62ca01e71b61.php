<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title>播放</title>
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
						<li class="active"><a href="<?php echo U('Home/play/index/id/1');?>">在线收听</a></li>
						<li><a href="<?php echo U('Home/lanmu/index');?>">往期节目</a></li>
						<li><a href="<?php echo U('Home/host/index');?>">校主持队</a></li>
						<li><a href="<?php echo U('Home/activity/index');?>">品牌活动</a></li>
						<?php echo ($url1); ?>
					</ul>
				</div>
			</div>
		</nav>
        <!--节目内容-->
		<div class="tab15" style="margin-top: 100px;">
			<div class="container">
				<div class="row">
				<?php if(is_array($programselect)): $i = 0; $__LIST__ = $programselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$program): $mod = ($i % 2 );++$i;?><div class="col-md-6">
						<div class="medi">
							<div class="media-heading">
								<img src="/bnuzbroadcast/<?php echo ($program["programpicture"]); ?>" class="img-responsive center-block picture" alt="" />
							</div>
							<div class="media-body" style="padding-top: 80px;">
								<audio src="/bnuzbroadcast/<?php echo ($program["programcontent"]); ?>" preload="auto" />
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="media">
							<div class="media-heading" style="text-align: center;">
								<span class="tab-h2"><?php echo ($program["programname"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
								<div style="padding-top: 5%">
								<p class="tab-p1"><?php echo ($program["programinstruction"]); ?></p></div>
							</div>
							<div class="media-bottom" style="margin-left: 60%;margin-top: 20px;">
								<img src="/bnuzbroadcast/Public/img/download.png" />
								<a href="#comment">
								<img src="/bnuzbroadcast/Public/img/comment.png" /></a>
							</div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<!--评论-->
					<a name="comment"></a>
				</div>
				<div class="row" style="margin-top: 50px;">
					<div class="col-md-8">
						<form action="<?php echo U('Play/pcomment');?>" method="post">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content1" name="pcontent" rows="6"></textarea>
								<?php if(is_array($programselect)): $i = 0; $__LIST__ = $programselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$program): $mod = ($i % 2 );++$i;?><input type="hidden" id="hid" value="<?php echo ($program["programid"]); ?>" name='programid'><?php endforeach; endif; else: echo "" ;endif; ?>
								<input type="submit" class="fabiao" onclick="addContent()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						</form>
						<?php if(is_array($programcomment)): $i = 0; $__LIST__ = $programcomment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$programcomment): $mod = ($i % 2 );++$i;?><div class="content"><img src="/bnuzbroadcast/<?php echo ($programcomment["userpicture"]); ?>" width="40px" height="40px" class="header"><?php echo ($programcomment["pcommentcontent"]); ?><div class="stime"><?php echo ($programcomment["pcommentdate"]); ?></div><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<!--同栏目推荐-->
					<div class="col-md-4">
						<p class="tab-p1" style="text-align: center;">同栏目推荐</p>
						<a href="<?php echo U('Home/play/index1');?>">
						<img src="/bnuzbroadcast/Public/img/recommend1.png" class="img-responsive center-block"/></a>
						<p class="tab-p1" style="margin-top: 50px;text-align: center;">同栏目推荐</p>
						<a href="<?php echo U('Home/play/index2');?>">
						<img src="/bnuzbroadcast/Public/img/recommend2.png" class="img-responsive center-block"/></a>
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
		<script src="/bnuzbroadcast/Public/audiojs/audiojs/audio.min.js"></script>
		<script>
			audiojs.events.ready(function() {
				var as = audiojs.createAll();
			});
		</script>
	</body>
</html>