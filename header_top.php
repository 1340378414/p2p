<nav class="navbar  navbar-inverse">
        <div class="container ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span
                        class="glyphicon glyphicon-phone-alt"></span>&emsp;11234488-999</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li id='homepage'><a  href="index.php">首页</a></li>
                    <li><a href="#">帮助</a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom"
                            title='<img src="./image/wx.jpg" width="100px">' data-html='true'>联系客服</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <script src='./lib/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.min.js'></script>
    <script>
        $.get('./api/loginStatu.php',function(data){
            if(data.isLogin){
                var add= `<li><a href="#">${data.username}</a></li>
                    <li><a href="#">赶快充值</a></li>
                    <li><a href="./api/logout.php">注销</a></li>`
                    
                $('#homepage').after(add);
            }else{
                var add=` <li><a href="login.php">登录</a></li><li><a href="register.php">注册</a></li>`
                    $('#homepage').after(add);
                    console.log(add);
            };
        },'json')
    </script>   