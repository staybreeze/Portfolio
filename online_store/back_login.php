<?php
include_once "./api/db.php";
if (isset($_SESSION['admin'])) {
  header('location:back.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>管理員登入</title>
  <link rel="icon" href="./img/logo3.jpg" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" media="screen and (max-width: 1000px)" href="./css/small_screen.css">
  <link rel="stylesheet" media="screen and (max-width:1600px)" href="./css/middle_screen.css">
  <link rel="stylesheet" media="screen and (min-width: 1600px)" href="./css/big_screen.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  

  <style>
    .aside {
      background-image: url(./img/18-2500x1667.jpg);
      opacity: 0.9;

    }

    .main {
      height: 100%;
    }

    .h3 {
      border-left: 10px solid brown;
    }


    h3>p {
      font-size: 20px;
      line-height: 30px;
    }

    .footer {
      margin-top: 0px;

    }

    .btn-group {
      margin-left: 156px !important;
    }

    .modal input[type='submit'] {
      margin-left: 408px !important;
    }

    @media screen and (max-width: 550px) {
      .aside {
        display: none;
      }
    }

    @media screen and (max-width: 550px) {
      .section {
        width: 100%;
        margin: auto !important;
        /* border: 1px solid black; */
      }

      .box {
        margin-left: -160px !important;

      }

      .input-group {

        width: 325px !important;
        margin-left: 190px !important;
      }

      .box>p {
        margin-left: 130px !important;
        margin-bottom: 30px !important;
      }

      .btn-group {
        margin-left: 310px !important;
      }

      .modal .input-group {

        width: 405px !important;
        margin-left: 00px !important;
      }

      .modal input[type='submit'] {
        margin-left: 345px !important;
      }

    }

    @media screen and (max-width: 450px) {
      .section {
        width: 100%;
        margin: auto !important;
        /* border: 1px solid black; */
      }

      .box {
        margin-left: -160px !important;

      }

      .input-group {

        width: 325px !important;
        margin-left: 160px !important;
      }

      .box>p {
        margin-left: 130px !important;
        margin-bottom: 30px !important;
      }

      .btn-group {
        margin-left: 310px !important;
      }

      .modal .input-group {

        width: 330px !important;

      }

      .modal input[type='submit'] {
        margin-left: 270px !important;
      }
    }
    @media screen and (max-width: 410px) {
      .section {
        width: 100%;
        margin: auto !important;
        /* border: 1px solid black; */
      }

      .box {
        margin-left: -160px !important;

      }

      .input-group {

        width: 325px !important;
        margin-left: 148px !important;
      }

      .box>p {
        margin-left: 130px !important;
        margin-bottom: 30px !important;
      }

      .btn-group {
        margin-left: 317px !important;
      }

      .box>span {
        margin-left: 130px !important;
      }

      .add {
        margin-left: 150px !important;

      }

      .modal .input-group {

        width: 289px !important;

      }

      .modal input[type='submit'] {
        margin-left: 231px !important;
      }
.footer{
  height:96vh !important
}
    }
  </style>
</head>


<body>
  <?php
  include_once "./inc/mouse_squares.php";
  include "./inc/header_aboutUs_articles.php"
  ?>
  <!-- ---- -->
  <div class="container-fluid">
    <div class="row d-flex main">
      <div class="col-5 aside">

      </div>

      <div class="col-6 section ms-5 ps-5">
        <br>
        <div class="box mt-5 text-center">


          <p class="mt-4" style="font-size:25px;font-weight:bold;text-align:center">管理員登入</p>


          <form action="./api/back_login.php" method="post" class=" col-12 col-sm-4 m-auto">
            <?php
            if (isset($_GET['error'])) {
              echo "<span style='color:red;text-align:center'>";
              echo $_GET['error'];
              echo "</span>";
            } ?>

            <div class="input-group my-1">
              <label class="col-xs-12 col-sm-4  input-group-text w-100">帳號:</label>
              <input class="form-control" type="text" name="acc" id="acc">
            </div>
            <div class="input-group my-1">
              <label class="col-4  input-group-text w-100 mt-3">密碼:</label>
              <input class="form-control" type="password" name="pw" id="pw">
            </div>
            <input type="hidden" name="windowWidth" id="hiddenWindowWidth" value="">
            <div class="btn-group">

              <input class="btn btn-secondary mx-2 mt-4" type="reset" value="重置">
              <input class="btn btn-warning mx-2 mt-4" id="submit" type="submit" value="送出">
            </div>

            <br> <br> <br> <br>


          </form>

        </div>

        <div class="col-1"></div>
      </div>
    </div>
  </div>
  </div>

  <?php
      include "./inc/login_form.php";
  include "./inc/footer.php"
  ?>
  <div class=" mt-5 col-md-5 col" style="border-left:5px solid white;margin-left:-5px">
  <ul class="pages">
      <li>
        <a class="footer-header" href="./aboutUs.php">關於我們</a>
      </li>
      <li>
        <a href="./aboutUs.php#origin">起源</a>
      </li>
      <li>
        <a href="./aboutUs.php#goal">目標</a>
      </li>
      <li>
        <a href="./aboutUs.php#cheetos">店貓－奇多（Cheetos）</a>
      </li>
    </ul>

    <ul class="pages">
      <li>
        <a class="footer-header" href="./articles.php#">貓咪文章</a>
      </li>
      <li>
        <a class="" href="./articles.php#">幼貓</a>
      </li>
      <li>
        <a class="" href="./articles.php#">成貓</a>
      </li>
      <li>
        <a class="" href="./articles.php#">老貓</a>
      </li>
    </ul>
    <ul class="pages">
      <li>
        <a class="footer-header" href="./index.php#store">購物商城</a>
      </li>
      <li>
        <a class="" href="./index.php#store">食物</a>
      </li>
      <li>
        <a class="" href="./index.php#store">玩具</a>
      </li>
      <li>
        <a class="" href="./index.php#store">生活用品</a>
      </li>
    </ul>
    <ul class="pages">
      <li>
        <a class="footer-header" href="login.php">會員專區</a>
      </li>
      <?php
      if (isset($_SESSION['user'])) {
        echo            '<li>';
        echo  '<a href="./member.php">修改密碼</a>';
        echo '</li>';
      } else {
        echo            '<li>';
        echo  '<a href="./add.php">加入會員</a>';
        echo '</li>';
      }
      ?>

      <li>
        <a href="./cart.php">訂單查詢</a>
      </li>
      <li>
        <a href="back_login.php">管理員登入</a>
      </li>

    </ul>


  </div>
  <?php
  include "./inc/copyright.php"
  ?>
</body>
<script>
  $(document).ready(function() {
    $('#hiddenWindowWidth').val(window.innerWidth);

    $("#submit").click(function() {
      if (window.innerWidth < 1200) {
        alert('後台請使用電腦開啟！謝謝～');
        return;
      }
    });

  });
</script>

</html>