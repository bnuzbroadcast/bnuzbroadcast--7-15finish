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
    <div style="padding-top: 5%">
    <form action="" method="post">
        <div class="row ">
            <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">栏目</span></div>
            <div class="col-md-6 logtitle">
                <input type="text" name="username"  value="" class="log-input2"/>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5">节目主题</span></div>
            <div class="col-md-6 logtitle">
                <input type="password" name="userpassword1"  value="" class="log-input2"/>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >节目内容</span></div>
            <div class="col-md-6 logtitle">
                <textarea id="content15" class="log-input3 "  rows="6"></textarea>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >添加图片</span></div>
            <div class="col-md-6 logtitle"><img id="img_name" alt="" />
            <input type="file" onchange="showimg();" id="cardpic" name="cardpic" /></div>
        </div>
        <div class="row ">
            <div class="col-md-2 col-md-offset-1 log-span  logtitle"><span class="tab-h5" >上传文件</span></div>
            <div class="col-md-6 logtitle"><img id="img_name2" alt="" />
                <input type="file" onchange="showimg();" id="cardpic2" name="cardpic" /></div>
        </div>
</form></div>
</div>
<script type="text/javascript">
    function showimg() {
        var img = document.getElementById("cardpic").value;
        document.getElementById("img_name").src =img;
    }
</script>


<script src="/bnuzbroadcast/Public/js/jquery.min.js"></script>
<script src="/bnuzbroadcast/Public/js/bootstrap.min.js"></script>
</body>
</html>