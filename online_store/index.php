<?php 

include_once "./api/db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社</title>
  <link rel="icon" href="./img/logo3.jpg" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <link rel="stylesheet" media="screen and (max-width: 400px)" href="./css/7th_screen.css"> -->
    <!-- <link rel="stylesheet" media="screen and (max-width: 800px)" href="./css/6th_screen.css"> -->
    <!-- <link rel="stylesheet" media="screen and (max-width  : 1200px)" href="./css/5th_screen.css"> -->
    <!-- <link rel="stylesheet" media="screen and (max-width: 1200px)" href="./css/smallscreen.css"> -->
<link rel="stylesheet" media="screen and (max-width: 1000px)" href="./css/small_screen.css">
<link rel="stylesheet" media="screen and (max-width:1600px)" href="./css/middle_screen.css">
<link rel="stylesheet" media="screen and (min-width: 1600px)" href="./css/big_screen.css">

  <style>

  </style>
</head>


<body>
<?php
include "./inc/header_index.php"
?>
  <!-- ---- -->
  <div class="contaainer caroisel" style="background-color: 13304a;" id="carousel">
    <!-- data-bs-ride="carousel" 使用 自動輪播功能 -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- 設定 秒數 data-bs-interval="1000" -->
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="./img/cheetos8.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>奇多（東京巴奈奈版）</h5>
            <p>
              Welcome to the Cheetos Meow Cooperative!</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./img/cheetos6.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>奇多（幼兒版）</h5>
            <p>Welcome to the Cheetos Meow Cooperative!</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./img/cheetos5.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>奇多（妖嬈版）</h5>
            <p>Welcome to the Cheetos Meow Cooperative!</p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="./img/cheetos3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>奇多（看什麼看版）</h5>
            <p>Welcome to the Cheetos Meow Cooperative!</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./img/cheetos2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>奇多（迷離眼神版）</h5>
            <p>Welcome to the Cheetos Meow Cooperative!</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="./img/cheetos1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>奇多（超可愛版）</h5>
            <p>Welcome to the Cheetos Meow Cooperative!</p>
          </div>
        </div>


      </div>
    </div>
  </div>

  <!-- 
  <div class="carosel bg-black">
    <div class="container-fluid">
      <div id="carouselExampleIndicators" class="carousel slide "class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="active"
            aria-current="true" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
            aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
            aria-label="Slide 6"></button>

        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="http://www.google.com">
              <img class="carousel-img" src="./img/cheetos7.jpg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
              <h5>奇多（東京巴奈奈版）</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="carousel-img" src="./img/cheetos6.jpg" class="d-block w-100" alt="..."></a>

            <div class="carousel-caption d-none d-md-block">
              <h5>奇多（幼兒版）</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="carousel-img" src="./img/cheetos5.jpg" class="d-block w-100" alt="..."></a>

            <div class="carousel-caption d-none d-md-block">
              <h5>奇多（妖嬈版）</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="carousel-img" src="./img/cheetos3.jpg" class="d-block w-100" alt="..."></a>

            <div class="carousel-caption d-none d-md-block">
              <h5>奇多（看什麼看版）</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="carousel-img" src="./img/cheetos2.jpg" class="d-block w-100" alt="..."></a>

            <div class="carousel-caption d-none d-md-block">
              <h5>奇多（迷離眼神版）</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="carousel-img" src="./img/cheetos1.jpg" class="d-block w-100" alt="..."></a>

            <div class="carousel-caption d-none d-md-block">
              <h5>奇多（超可愛版）</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div> -->


  <!-- </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div> -->
  <!-- ---- -->
<?php
include "./inc/goods.php"
?>
  <!-- ---- -->
 

<?php
include "./inc/login_form.php"
?>
  
  <?php
include "./inc/footer.php"
?>

        <div class=" mt-5 col-md-5 col footer-pages" style="border-left:5px solid white">
          <ul class="pages">
            <li>
              <a class="footer-header" href="./aboutUs.php">關於我們</a>
            </li>
            <li>
              <a href="./aboutUs.php">起源</a>
            </li>
            <li>
              <a href="./aboutUs.php#origin">目標</a>
            </li>
            <li>
              <a href="./aboutUs.php#cheetos">店貓－奇多（Cheetos）</a>
            </li>
          </ul>

          <ul class="pages">
            <li>
              <a class="footer-header" href="./articles.php">貓咪文章</a>
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
              <a class=""href="./index.php#store">玩具</a>
            </li>
            <li>
              <a class="" href="./index.php#store">生活用品</a>
            </li>
          </ul>
          <ul class="pages">
            <li>
              <a class="footer-header" href="" data-bs-toggle="modal" data-bs-target="#myModal">會員專區</a>
            </li>
            <?php
            if(isset($_SESSION['user'])){
              echo            '<li>';
             echo  '<a href="member.php">修改密碼</a>';
            echo '</li>';
            }else{
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



