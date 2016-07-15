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
						<li class="active"><a href="<?php echo U('Home/play/index');?>">在线收听</a></li>
						<li><a href="<?php echo U('Home/lanmu/index');?>">往期节目</a></li>
						<li><a href="<?php echo U('Home/host/index');?>">校主持队</a></li>
						<li><a href="<?php echo U('Home/activity/index');?>">品牌活动</a></li>
						<?php echo ($url1); ?>
					</ul>
				</div>
			</div>
		</nav>

		<div class="tab15" style="margin-top: 100px;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="medi">
							<div class="media-heading">
								<img src="/bnuzbroadcast/Public/img/play1.png" class="img-responsive center-block" alt="" />
							</div>
							<div class="media-body" style="padding-top: 80px;">
								<audio src="/bnuzbroadcast/Public/audio/宋冬野 - 斑马，斑马.mp3" preload="auto" />
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="media">
							<div class="media-heading" style="text-align: center;">
								<span class="tab-h2">李香兰</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
								<span class="tab-h3">播主：千阳、灿烂</span>
								<p class="tab-p"><b>本期配乐：Purple Rain/Historia De Un Amor</b></p>
								<p class="tab-p1">执着青春 青春，如诗如梦、如画如火。<br />年轻的生命追求一份烂漫，寻找一丝恬静，这就是充满诗意<br />的青春；纯洁的心灵向往美好的未来，设计一幅又一幅壮丽<br />的蓝图，憧憬着一个又一个美好的未来，这就是梦幻般的青<br />春；生机盎然的我们凭着那份执着和激情，无悔地去寻求生<br />命的价值和人生的高度，这就是热情似火的青春。 朋友们，<br />在这菁菁校园里，我们不需感伤时光流逝，而应去珍惜，去<br />尽情地挥洒我们的青春。只有这样，我们才能尽情地欣赏青<br
									/>春这朵美丽的鲜花，而不必去琢磨调落的花瓣和枯黄的残枝<br />败叶，好好利用我们青春这笔宝贵的财富，创造出我们能拥<br />有的未来的资本。 其实青春，并不短暂，青春之花调谢后，<br />她又会孕育出新的更艳丽的花朵，“落红不是无情物，化作<br />春泥更护花”，...</p>
							</div>
							<div class="media-bottom" style="margin-left: 60%;margin-top: 20px;">
								<img src="/bnuzbroadcast/Public/img/play.png" />
								<img src="/bnuzbroadcast/Public/img/download.png" />
								<img src="/bnuzbroadcast/Public/img/like.png" />
								<a href="#comment">
								<img src="/bnuzbroadcast/Public/img/comment.png" /></a>
							</div>
						</div>
					</div>
					<a name="comment"></a>
				</div>

				<div class="row" style="margin-top: 50px;">
					<div class="col-md-8">
						<form action="<?php echo U('Play1/pcomment');?>" method="post">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content1" name="pcontent" rows="6"></textarea>
								<input type="hidden" id="hid" value="1" name='programid'>
								<input type="submit" class="fabiao" onclick="addContent()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						</form>
						<!-- <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header"><?php echo ($vo["hcommentcontent"]); ?><div class="stime"><?php echo ($vo["hcommentdate"]); ?></div><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?> -->
					</div>
					
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
		<script type="text/javascript">
			function addContent()
			{
				var now = new Date();
				var layer = document.getElementById("layer");
				var divlayer = document.createElement("div");
				var con = document.getElementById("content").value;
				con = con.replace(/\n/g,"<br />");
 
				
				divlayer.innerHTML = "<img src='/bnuzbroadcast/Public/img/touxiang1.png' width='40px' class='header' />" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
				divlayer.className = "content";
				
				layer.appendChild(divlayer);

				document.getElementById("content").value = "";
			}
		</script>
	</body>

</html>