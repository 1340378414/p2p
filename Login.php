<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>用户注册</title>

  <link href="./lib/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="./dist/css/template.min.css">
  <link rel="stylesheet" href="./lib/bootstrapValidate/css/bootstrapValidator.min.css">
</head>

<body>
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

      <ul class="nav navbar-nav">
        <li><a href="">注册</a> </li>
      </ul>
      <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class='container' style='margin-top:20px'>
    <div class="panel panel-default ">
      <div class="panel-heading">
        <h3 class="panel-title">用户注册</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">用户名</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name='username' placeholder="请输入用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">密码</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" name='pwd' placeholder="请输入密码">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
              <button type="submit" class="btn btn-success">登录</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


<div class="modal fade bs-example-modal-sm" id='myModal' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" style='height: 100px'>
      ...
    </div>
  </div>
</div>

  <?php
        require_once('footer.php')
    ?>

  <script src='./lib/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.min.js'></script>
  <script src='./lib/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js'></script>
  <script src='./lib/bootstrapValidate/js/bootstrapValidator.min.js'></script>
  <script>
    $('.form-horizontal').bootstrapValidator({
      // 默认的提示消息
      message: 'This value is not valid',
      // 表单框里右侧的icon
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
        username: {
          message: '用户名验证失败',
          validators: {
            notEmpty: {
              message: '用户名不能为空'
            },
            stringLength: {
              min: 6,
              max: 10,
              message: '用户名长度不能小于6位或超过10位'
            },
            regexp: { //正则表达式
              regexp: /^[a-zA-Z0-9_]+$/,
              message: '用户名只能包含大写、小写、数字和下划线'
            },
          }
        },
        pwd: {
          validators: {
            notEmpty: {
              message: '密码不能为空'
            },
            stringLength: {
              min: 6,
              max: 15,
              message: '密码长度不能小于6位或超过15位'
            }
          }
        },
      }
    }).on('success.form.bv', function (e) {
      // 阻止默认事件提交
      e.preventDefault();
      var parameter = $('form.form-horizontal').serialize();
      $.post('../api/userLogin.php', parameter, function (data) {
        console.log(data);
        if (data.isSuccess) {
          var i=5;
          $('.modal-content').html(`<span>${data.massage}</span> <span id='daojishi'>${i}</span> `);
          $('#myModal').modal('show');
         var timer=setInterval(() => {
            if(i==0){
              clearInterval(timer);
              location.href = 'index.php';
            }else{
              i--;
              $('#daojishi').html(i)
            }
          }, 1000);
         

        } else {
          alert(data.massage);
        }
      }, 'json')
    });
  </script>
</body>

</html>