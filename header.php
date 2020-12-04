<?php
require_once('header_top.php')
?>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="./image/logo.png" alt="logn"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <ul class="nav navbar-nav" id='headerNav'>
                <li class="active"><a href="index.php?page=0"> 首页</a></li>
                <li><a href="personal.php?page=1">我要投资 </a></li>
                <li><a href="personal.php?page=2">我要借款 </a></li>
                <li><a href="personal.php?page=3">个人中心 </a></li>
                <li><a href="personal.php?page=4">新手指引 </a></li>
                <li><a href="personal.php?page=5">关于我们 </a></li>
            </ul>
            <!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <script>
        var url=location.href;
       var page=url.split('=');
       console.log(page[1]);
       $('#headerNav li').eq(page[1]).addClass('active').siblings().removeClass('active');
    </script>
    