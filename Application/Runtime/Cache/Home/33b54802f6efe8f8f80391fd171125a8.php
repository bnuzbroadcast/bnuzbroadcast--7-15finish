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
								<img src="/bnuzbroadcast/Public/img/select1.png" class="img-responsive center-block" alt="" />
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
								<span class="tab-h3">播主：千阳、灿烂</span>
								<p class="tab-p"><b>本期配乐：Purple Rain/Historia De Un Amor</b></p>
								<p class="tab-p1">一部电影，讲述一个人生。<br />
									但当你遇到它时，它就是只属于你自己的故事，<br />
									或许如某个午后的阳光般温暖，或许如即将绽放的花苞般饱满。<br />
									如影随形，为你展现每一部电影中最绚烂的画卷。<br />
									只是愿你因为这些故事，可以有充分的忍耐去担当，<br />
									有未来的坚定去信仰。<br />
									“我们去看什么电影？”<br />
									——《寻龙诀》尤其是跟之前陆川改编版《九层妖塔》相比，<br />
									不少观众都表示：“甩出《九层妖塔》九条街，<br />
									《寻龙诀》好歹真的有盗墓！”</p>
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
						<form action="<?php echo U('Play/pcomment');?>" method="post">
						<div class="liuyan" style="padding: 10px 10px 0 10px;margin-bottom: 30px;">
							<h5 class="tab-h5">添加评论</h5>
							<div>
								<textarea id="content1" name="pcontent" rows="6"></textarea>
								<input type="hidden" id="hid" value="2" name='pid'>
								<input type="submit" class="fabiao" onclick="addContent()" value="发表" />
								<div class="clear"></div>
							</div>
						</div>
						</form>
						<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content"><img src="/bnuzbroadcast/Public/img/touxiang1.png" width="40px" class="header"><?php echo ($vo["pcommentcontent"]); ?><div class="stime"><?php echo ($vo["pcommentdate"]); ?></div><div class="clear"></div></div><?php endforeach; endif; else: echo "" ;endif; ?> 
					</div>
					
					<div class="col-md-4">
						<p class="tab-p1" style="text-align: center;">同栏目推荐</p>
						<a href="<?php echo U('Home/play/index3');?>">
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