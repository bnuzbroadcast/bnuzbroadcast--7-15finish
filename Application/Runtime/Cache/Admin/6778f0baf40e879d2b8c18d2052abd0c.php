<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/bnuzbroadcast/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bnuzbroadcast/Public/css/style.css">
</head>
<body>
<div class="container">
    <div style="padding-left: 20%;padding-top: 10%">
<ul class="admin-ul" id="Myul">
    <li>节目</li>
    <ul><li><a href="jiemushangchuan.html" target="rightFrame">节目上传</a></li>
        <li><a href="jiemuxiugai.html" target="rightFrame">节目修改</a></li>
        <li><a href="jiemuliuyan.html" target="rightFrame">节目留言</a></li>
    </ul>
    <li>用户管理</li>
    <ul><li><a href="yonghuxinxi.html" target="rightFrame">用户信息</a></li>
        <li><a href="liuyanguanli.html" target="rightFrame">留言管理</a></li>
    </ul>
    <li>主持队活动</li>
    <ul><li><a href="#" target="rightFrame">主持队信息</a></li>
        <li><a href="zhuchiduiliuyan.html" target="rightFrame">主持队留言</a></li>
        <li><a href="zhuchiduiyaoyue.html" target="rightFrame">主持队邀约</a></li>
    </ul>
    <li>公告通知</li>
    <ul><li><a href="" target="rightFrame">校园公告</a></li>
        <li><a href="" target="rightFrame">活动通知</a></li>
        <li><a href="huodongbaoming.html" target="rightFrame">活动报名</a></li>
    </ul>
</ul>
</div>
<div>



<script type="text/javascript">
    $(function(){
        //改变div的高度
        $("#Myul").height($(window).height());
        $("#Myul").width($(window).width());
    });
</script>
</body>
</html>