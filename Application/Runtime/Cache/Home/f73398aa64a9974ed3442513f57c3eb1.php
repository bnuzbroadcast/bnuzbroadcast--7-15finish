<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>个人页面</title>
	<link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
	<link rel="stylesheet" href="/bnuzbroadcast/Public/css/personal.css">
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
				<li><a href="<?php echo U('Home/play/index/id/1');?>">在线收听</a></li>
				<li><a href="<?php echo U('Home/lanmu/index');?>">往期节目</a></li>
				<li ><a href="<?php echo U('Home/host/index');?>">校主持队</a></li>
				<li><a href="<?php echo U('Home/activity/index');?>">品牌活动</a></li>
				<?php echo ($url1); ?>
			</ul>
		</div>
	</div>
</nav>
<div class="" style="margin-top: 80px;">
	<div class="maincontent">
<div class="tab2">
	<div class="container">
		<h2 class="tab-h2">
			<div class="left2 tab-p1">
			<ul >
				<li  ><a href="message">修改信息</a></li>
				<li  ><a href="index.html">个人状态</a></li>
			</ul>
		</div><br /></h2>
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="media select" >
					<div class="media-heading">
<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><img src="/bnuzbroadcast/<?php echo ($user["userpicture"]); ?>" class="img-responsive" alt="" /><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<div class="media-middle">
						<div class="left3">
							<div class="tab3">
								<div class="left3_1">
									<h2 class="tab-p1">【校内公告】</h2>
									<div class="row">
										<div class="col-md-12">
											<div class="media">
												<div class="media-heading">
													<img src="/bnuzbroadcast/Public/img/notice.png" class="img-responsive center-block" alt="" />
												</div>
												<div class="media-body" style="padding-top: 30px;">
													<p class="tab-p3"><span style="color: #6ab3a7;">信息技术学院</span>第十三届IT节风暴来袭，科技学时和丰厚奖金等你来拿。<br />5月7日截止提交作品，团体参赛不得超过五人。</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="media-bottom select-left">
					</div>
				</div>
			</div>
			<div class="">
				<div class="media select">
					<div class="media-heading">
					</div>
					<div class="media-middle">
						<div style="padding:0%">
							<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><p class="name"><?php echo ($user["username"]); ?></p>
								<p class="name2"><?php echo ($user["userinstruction"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
					<div class="media-bottom select-left">
						<div class="middle2">
							<p class="tab-p1">个人状态</p>
							<div style="padding-top: 5%;background-color: white">
							<form action="/bnuzbroadcast/index.php/Home/User/upload" enctype="multipart/form-data" method="post">
								<div>
									<div class="row ">
										<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">昵称</span></div>
										<div class="col-md-6 logtitle">
											<input type="text" name="username"  value="" class="log-input2"/>
										</div>
									</div>
									<div class="row ">
										<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">密码</span></div>
										<div class="col-md-6 logtitle">
											<input type="password" name="userpassword"  value="" class="log-input2"/>
										</div>
									</div>
									<div class="row ">
										<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">学号</span></div>
										<div class="col-md-6 logtitle">
											<input type="text" name="usernumber"  value="" class="log-input2"/>
										</div>
									</div>
									<div class="row ">
										<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >邮箱</span></div>
										<div class="col-md-6 logtitle">
											<input type="text" name="usermail"  value="" class="log-input2"/>
										</div>
									</div>
									<div class="row ">
										<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >电话</span></div>
										<div class="col-md-6 logtitle">
											<input type="text" name="userphone"  value="" class="log-input2"/>
										</div>
									</div>
									<div class="row ">
										<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >简介</span></div>
										<div class="col-md-6 logtitle">
											<textarea id="text" name="userinstruction" class="log-input3 "  rows="6"></textarea>
										</div>
									</div>
									<div class="row ">
										<div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >头像</span></div>
										<div class="col-md-6 logtitle">
											<input type="file" name="userpicture[]"/>
										</div>
									</div>
									<div class="row" style="text-align: right;">
										<div class="col-md-4 col-md-offset-5">
											<input type="submit" name="" id="" value="更改" class="log-button"/>
										</div>
									</div>
								</div>
							</form>
                     </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
</div>
</body>
</html>