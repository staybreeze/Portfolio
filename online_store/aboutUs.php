<?php
include_once "./api/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>關於我們</title>
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
    }

    .box>p {
      font-size: 20px;
      line-height: 40px;
    }

    .footer {
      margin-top: 0px;

    }

    @media screen and (max-width: 550px) {
      .aside {
        margin-left: 100px;
      }
    }

    @media screen and (max-width: 550px) {
      .aside>img {
        width: 250px;
      }

      .box {
        width: 300px;
      }
    }

    @media screen and (max-width: 450px) {

      .modal input[type='submit'] {
        margin-left: 270px !important;
      }
    }

    @media screen and (max-width: 450px) {

      .aside>img,
      .box {
        margin-left: -30px;
      }
    }
    @media screen and (max-width: 410px) {

.aside>img,
.box {
  margin-left: -50px;
}
}
  </style>
</head>


<body id="origin">
  <?php
      include_once "./inc/mouse_squares.php";
  include "./inc/header_aboutUs_articles.php"
  ?>
  <!-- ---- -->
  <div class="container-fluid">
    <div class="row d-flex main">
      <div class="col-5 aside">

      </div>
      <?php
      $about = $About->find(1);
      ?>
      <div class="col-6 section ms-5 ps-5">
        <br>
        <div class="box mt-5 pt-3">
          <h3 class="h3">&nbsp;起源</h3>
          <p>
            <?= $about['origin']; ?>
          </p>
        </div>
        <div id="goal"></div>
        <br>
        <div class="box mt-5 pt-5">
          <h3 class="h3" >&nbsp;目標</h3>
          <p>
            <?= $about['goal']; ?>
          </p>

        </div>
        <div id="cheetos"></div>
        <br>
        <div  id="cheetos" class="box mt-5 pt-5" style="margin-top:40px">
        
          <h3 class="h3">&nbsp;店貓－奇多（Cheetos） </h3>
          <img src="./img/<?= $about['img']; ?>" width="100%" height="100%" class="mt-3">
          <p class="mt-3">

            <?= $about['cheetos']; ?> 🐾🍪
            <br><br><br>
          </p>

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
  <div class=" mt-5 col-md-5 col footer-pages" style="border-left:5px solid white">
  <ul class="pages">
      <li>
        <a class="footer-header" href="#">關於我們</a>
      </li>
      <li>
        <a href="#origin">起源</a>
      </li>
      <li>
        <a href="#goal">目標</a>
      </li>
      <li>
        <a href="#cheetos">店貓－奇多（Cheetos）</a>
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
  include "./inc/copyright.php"
  ?>
</body>

</html>