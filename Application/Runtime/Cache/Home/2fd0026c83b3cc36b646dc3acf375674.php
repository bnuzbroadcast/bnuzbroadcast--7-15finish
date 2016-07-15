<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title>主持队跳转</title>
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
						<li ><a href="<?php echo U('Home/index/index');?>">师大之音</a></li>
						<li><a href="<?php echo U('Home/play/index');?>">在线收听</a></li>
						<li><a href="<?php echo U('Home/lanmu/index');?>">往期节目</a></li>
						<li class="active"><a href="<?php echo U('Home/host/index');?>">校主持队</a></li>
						<li><a href="<?php echo U('Home/activity/index');?>">品牌活动</a></li>
						<?php echo ($url1); ?>
					</ul>
				</div>
			</div>
		</nav>
		<!--团队-->
		<div class="container team-turn" style="margin-top: 80px;">
			<div class="row">
				<?php if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><div class="col-sm-4 ">
					<a href="../host2/index/id/<?php echo ($host["hostid"]); ?>">
					<img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>" class="img-responsive center-block team1" alt="" /></a>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="clear"></div>
				<div class="row" style="margin-top: 30px;">
					<?php if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,3,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><div class="col-sm-3">
						<a href="../host2/index/id/<?php echo ($host["hostid"]); ?>">
						<img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>" class="img-responsive center-block team1" alt="" /></a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="clear"></div>
				<div class="row" style="margin-top: 30px;">
					<?php if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,7,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><div class="col-sm-4">
							<a href="../host2/index/id/<?php echo ($host["hostid"]); ?>">
								<img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>" class="img-responsive center-block team1" alt="" /></a>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="clear"></div>
				<div class="row" style="margin-top: 30px;">
					<?php if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,10,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><div class="col-sm-3">
							<a href="../host2/index/id/<?php echo ($host["hostid"]); ?>">
								<img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>" class="img-responsive center-block team1" alt="" /></a>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="clear"></div>
				<div class="row" style="margin-top: 30px;">
					<?php if(is_array($select)): $i = 0; $__LIST__ = array_slice($select,14,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$host): $mod = ($i % 2 );++$i;?><div class="col-sm-6">
							<a href="../host2/index/id/<?php echo ($host["hostid"]); ?>">
								<img src="/bnuzbroadcast/<?php echo ($host["hostbig"]); ?>" class="img-responsive center-block team1" alt="" /></a>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="clear"></div>
				<div class="row" style="margin-top: 30px;">
				<div class="col-sm-12">
					<a href="<?php echo U('Home/host2/index');?>">
					<img src="/bnuzbroadcast/Public/img/lglogo.png" class="img-responsive center-block" alt="" /></a>
				</div>
				</div>
				<div class="clear"></div>
		</div>
		<!--底部-->
		<div class="container">
			<footer>
				<p class="footer-p" style="border-bottom: 5px solid #999;padding-bottom: 30px;">广天下之事·播百家之言</p>
				<p class="tab-p1" style="text-align: center;color: #666;margin-top: 20px;font-size: 18px;">北京师范大学珠海分校师大之音广播台 版权所有<br />地址：广东省珠海市唐家湾镇金凤路18号北京师范大学珠海分校粤华三栋 邮编：519000</p>
			</footer>
		</div>

		<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
		<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
	</body>

</html>