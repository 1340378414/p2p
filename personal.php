<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="./lib/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="./dist/css/personal.min.css">
</head>

<body>
  <?php
        require_once('header.php');
        require_once('./api/isLogin.php');
    ?>
  <div class='container'  style='margin-top:20px;'>
    <div class="row ">
      <div class="col-md-3 col-md-6">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  投掷项目
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <ul>
                  <li>1</li>
                  <li>2</li>
                  <li>3</li>
                  <li>4</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">
                  投掷项目
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <ul>
                  <li>1</li>
                  <li>2</li>
                  <li>3</li>
                  <li>4</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  投掷项目
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <ul>
                  <li>1</li>
                  <li>2</li>
                  <li>3</li>
                  <li>4</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

     
      <div class="col-md-9 col-md-12" >
        <div class="panel panel-default">
          <div class="panel-body">
            <div class='row'>
            <div class="col-md-3" style='text-align: center'>
                <img src='./image/head_icon.jpg' alt="" width='100px'>
            </div>
            <div class="col-md-9" >
              <p>昵 称：源代码教育</p>
            <p>用户名：小强</p>
            <p>最后登录时间：2016-10-25 15:30:10</p>
            </div>
           
            </div>
          
            
          </div>
        </div>

      </div>

    </div>
  </div>

  
  <?php
        require_once('footer.php')
    ?>

  <script src='./lib/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.min.js'></script>
  <script src='./lib/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js'></script>

</body>

</html>