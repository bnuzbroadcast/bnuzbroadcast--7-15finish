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
						<li><a href="<?php echo U('Home/login/index');?>">登陆</a></li>
						<li><a href="<?php echo U('Home/signup/index');?>">注册</a></li>
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
								<img src="/bnuzbroadcast/Public/img/select3.png" class="img-responsive center-block" alt="" />
							</div>
							<div class="media-body" style="padding-top: 80px;">
								<audio src="/bnuzbroadcast/Public/audio/宋冬野 - 斑马，斑马.mp3" preload="auto" />
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="media">
							<div class="media-heading" style="text-align: center;">
								<span class="tab-h2">如影随行</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
								<span class="tab-h3">播主：念念 疯帽子 大牛 一晴</span>
								<p class="tab-p"><b>本期配乐：Purple Rain/Historia De Un Amor</b></p>
								<p class="tab-p1">旅行就好像一粒种子，<br />
									突然在我的脑海里萌发，<br />
									不可抑制的悄然成长起来。<br />
									好想去旅行，好想去看看这个世界，<br />
									好想漫步在大理的小镇里邂逅一段爱情，<br />
									好想畅行在西藏的蓝天下感受我和宇宙的距离，<br />
									好想漫步在黄金海岸的沙滩上看着斜阳缓缓西沉，<br />
									好想站在行驶在太平洋的邮轮上感受世界的宽广，<br />
									好想徒步于大兴安岭的林海中放声长啸，<br />
									好想，好想......</p>
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
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content" rows="6"></textarea>
								<input type="button" class="fabiao" onclick="addContent()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header">11111111111<div class="stime">2016/4/30 下午10:00:40</div><div class="clear"></div></div>
						<div id="layer"></div>
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