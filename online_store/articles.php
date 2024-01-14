<?php
include_once "./api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>文章</title>
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
      font-size: 22px;
      font-weight: bolder;
    }


    h3>p {
      font-size: 20px;
      line-height: 30px;
    }

    .footer {
      margin-top: 50px;
    }

    .box {
      margin-top: 50px;
      width: 33%;
      height: 33%;

    }

    @media screen and (max-width: 450px) {

      .modal input[type='submit'] {
        margin-left: 270px !important;
      }
      /* .container-articles{
        border:10px solid #d8a25a;
        border-top:none;
      } */
      .row-articles{
        margin-left:3px
      }
    }
  </style>
</head>


<body>

  <?php
  include "./inc/header_aboutUs_articles.php"
  ?>

  <!-- ---- -->
  <div class="container container-articles">
    <div class="d-flex flex-wrap row  row-articles">
      <?php
      $articles = $Article->all();

      foreach ($articles as $article) {
      ?>
        <div class="col-md-8 col-lg-6  col-xl-4 mt-5">


          <h3 style="margin:auto"class="h3">&nbsp;<?= $article['title']; ?></h3>
          <a style="margin:auto"href="./articles/<?= $article['time']; ?>.php"><img class="mt-4" style="border-radius:5px 5px 5px 5px " src="./img/<?= $article['img']; ?>" width="375px" height="300px"></a>

          <a style="margin:auto"href="./articles/<?= $article['time']; ?>.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>

        </div>

      <?php
      }
      ?>
    </div>
  </div>

  <?php

  include "./inc/login_form.php"
  ?>

  <?php
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
        <a class="footer-header" href="#">貓咪文章</a>
      </li>
      <li>
        <a class="" href="#">幼貓</a>
      </li>
      <li>
        <a class="" href="#">成貓</a>
      </li>
      <li>
        <a class="" href="#">老貓</a>
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
        echo  '<a href="member.php">修改密碼</a>';
        echo '</li>';
      } else {
        echo            '<li>';
        echo  '<a href="add.php">加入會員</a>';
        echo '</li>';
      }
      ?>

      <li>
        <a href="cart.php">訂單查詢</a>
      </li>
      <li>
        <a href="back_login.php">管理員登入</a>
      </li>

    </ul>



  </div>

  <?php
  include "./inc/login_form.php"
  ?>
  <?php
  include "./inc/copyright.php"
  ?>

</body>

</html>