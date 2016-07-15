<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title>主持人页</title>
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
	</head>
	<body style="background-color: #d8d7d7;">
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
						<?php echo ($url1); ?>
					</ul>
				</div>
			</div>
		</nav>
       <!--主持人列表-->
		<div style="margin-top: 90px;">
			 <div class="container">
			 	<div class="row">
			 		<div class="col-sm-9" >
						<?php if(is_array($hostlist)): $i = 0; $__LIST__ = array_slice($hostlist,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><a href="../../../host2/index/id/<?php echo ($host["hostid"]); ?>"> <img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>"  alt=""  class="m2 team2"/></a><?php endforeach; endif; else: echo "" ;endif; ?>
			 		</div>
			 	</div>
			 	<div class="row">
			 		<div class="col-sm-2"></div>
			 		<div class="col-sm-9 kongxi" >
						<?php if(is_array($hostlist)): $i = 0; $__LIST__ = array_slice($hostlist,8,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><a href="../../../host2/index/id/<?php echo ($host["hostid"]); ?>"> <img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>"  alt=""  class="m2 team2"/></a><?php endforeach; endif; else: echo "" ;endif; ?>
			 		</div>
			 	</div>
			 </div>
		</div>
		<!--被选择的主持人-->
	<?php if(is_array($hostselect)): $i = 0; $__LIST__ = $hostselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><div style="margin-top: 60px;">
			<div class="container">
			<div class="carousel-inner">
				<div class="item active">
					<div class="row">
						<div class="col-md-7">
							<a href="../host2/index/id/<?php echo ($host["hostid"]); ?>">	<img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>" class=" img-responsive center-block team3"/></a>
						</div>
						<div class="col-md-5" style="text-align: center;">
							<h2 class="tab-h2">校主持队<?php echo ($host["hostposition"]); ?></h2>
							<img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>" class="team4 img-responsive center-block"/>
							<h3 class="tab-h3"><?php echo ($host["hostname"]); ?></h3>
							<p class="tab-p1" style="border-bottom: 5px solid #6ab3a7;padding-bottom: 15px;">身高:<?php echo ($host["hostheight"]); ?>cm <br /> <?php echo ($host["hostmarjor"]); ?> <br /> 职位:<?php echo ($host["hostposition"]); ?> </p>
							<div class="more">
								<a href="../../appointment/id/<?php echo ($host["hostid"]); ?>" style="margin-right: 30px;"><input type="button" style="font-size: 20px;" value="活动邀约"></a>
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<img src="/bnuzbroadcast/Public/img/comment.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!--评论-->
		<div  class="container" style="margin-top: 80px;">
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo U('Host2/hcomment');?>"   method="post">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content" name="hcontent" rows="6" ></textarea>
								<?php if(is_array($hostselect)): $i = 0; $__LIST__ = $hostselect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><input type="hidden" id="hid" value="<?php echo ($host["hostid"]); ?>" name='hostid'><?php endforeach; endif; else: echo "" ;endif; ?>
								<input type="submit" class="fabiao"  value="发表" />
								<div class="clear"></div>
							</div>
						</div>
					</form>
					<?php if(is_array($hostcomment)): $i = 0; $__LIST__ = $hostcomment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostcomment): $mod = ($i % 2 );++$i;?><div class="content"><img src="/bnuzbroadcast/<?php echo ($hostcomment["userpicture"]); ?>" width="40px" height="40px" class="header"><?php echo ($hostcomment["hcommentcontent"]); ?><div class="stime"><?php echo ($hostcomment["hcommentdate"]); ?></div><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<!--底部-->
		<div class="container">
			<footer>
				<p class="footer-p" style="border-bottom: 5px solid #999;padding-bottom: 30px;">广天下之事·播百家之言</p>
				<p  class="tab-p1" style="text-align: center;color: #666;margin-top: 20px;font-size: 18px;">北京师范大学珠海分校师大之音广播台 版权所有<br />地址：广东省珠海市唐家湾镇金凤路18号北京师范大学珠海分校粤华三栋 邮编：519000</p>
			</footer>
		</div>
		<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
		<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
	</body>
</html>