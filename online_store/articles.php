<?php 
include_once "./api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>文章</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      font-size: x-large;
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


  </style>
</head>


<body>

<?php
include "./inc/header_aboutUs_articles.php"
?>

  <!-- ---- -->
  <div class="container">
    <div class="d-flex flex-wrap row" >
      <div class="col-md-8 col-lg-6  col-xl-4 mt-5">
        <h3 class="h3">&nbsp;幼貓照護指南：啟蒙與關愛的開始</h3>
        <a href="./articles/article_1.php"><img class="pt-3" src="./img/kitten.jpg" alt="" width="375px"
            height="300px"></a>

        <a href="./articles/article_1.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>

      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 mt-5">
        <h3 class="h3">&nbsp;成貓照護指南：健康與活力的秘訣</h3>
        <a href="./articles/article_2.php"><img class="pt-3" src="./img/adult.jpg" alt="" width="375px" height="300px"></a>

        <a href="./articles/article_2.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>


      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 mt-5">
        <h3 class="h3">&nbsp;老貓照護指南：柔情伴隨，溫馨陪伴</h3>
        <a href="./articles/article_3.php"><img class="pt-3" src="./img/cat4.jpg" alt="" width="375px" height="300px"></a>

        <a href="./articles/article_3.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>

        </div>
      <div class="col-md-8 col-lg-6  col-xl-4 mt-5">
        <h3 class="h3">&nbsp;從幼到老：貓咪生命的三個重要階段</h3>
        <a href="./articles/article_4.php"><img class="pt-3" src="./img/cat11.webp" alt="" width="375px" height="300px"></a>

        <a href="./articles/article_4.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>


      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 mt-5">
        <h3 class="h3">&nbsp;探索貓咪的時光隧道</h3>
        <a href="./articles/article_5.php"><img class="pt-3" src="./img/cat2.jpeg" alt="" width="375px" height="300px"></a>

        <a href="./articles/article_5.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>

      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 mt-5">
        <h3 class="h3">&nbsp;貓咪的皮膚護理學問</h3>
        <a href="./articles/article_6.php"><img class="pt-3" src="./img/cat3.webp" alt="" width="375px" height="300px"></a>

        <a href="./articles/article_6.php"><input class="btn btn-warning mt-3" type="submit" value="觀看文章"></a>


      </div>

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
              <a class="footer-header" href="./aboutUs.php#">關於我們</a>
            </li>
            <li>
              <a href="./aboutUs.php#">起源</a>
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
include "./inc/login_form.php"
?>
        <?php
      include "./inc/copyright.php"
      ?>
      
</body>

  </html>