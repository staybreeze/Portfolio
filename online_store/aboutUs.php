<?php
include_once "./api/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>關於我們</title>
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

      .aside>img,
      .box {
        margin-left: -30px;
      }
    }
  </style>
</head>


<body>
  <?php
  include "./inc/header_aboutUs_articles.php"
  ?>
  <!-- ---- -->
  <div class="container-fluid">
    <div class="row d-flex main">
      <div class="col-5 aside">

      </div>
<?php
$about=$About->find(1);
?>
      <div class="col-6 section ms-5 ps-5">
        <br>
        <div class="box mt-5">
          <h3 class="h3">&nbsp;起源</h3>
          <p id="origin">

          <?=$about['origin'];?>
          </p>
        </div>

        <div class="box mt-5 pt-5">
          <h3 class="h3">&nbsp;目標</h3>
          <p id="cheetos">

          
          <?=$about['goal'];?>
          </p>
          <img src="./img/<?= $about['img']; ?>"width="100%" height="100%" class="mt-5">
        </div>
          <div class="box mt-5">
            <h3 class="h3">&nbsp;店貓－奇多（Cheetos） </h3>
            <p>

              
          <?=$about['cheetos'];?> 🐾🍪
              <br><br><br>
            </p>

          </div>

          <div class="col-1"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">會員登入</h4>
          <img src="./img/logo1.png" alt="" width="60px">
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <!-- 插入程式碼要有頭跟END，方便日後維護及辨識 -->
          <!-- Modal body container.. -->
          <div class="container mt-3">


            <form action="./api/login.php">

              <div class="row">
                <div class="col-12">
                  <div class="mb-3">
                    <label for="price">帳號:</label>
                    <input type="text" class="form-control" id="acc" placeholder="Enter acc" name="acc">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="mb-3">
                    <label for="unit">密碼:</label>
                    <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">
                  </div>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-12">
                  <div class="mb-3">
                    <div class="d-flex gap-2">
                      <button type="reset" class="btn btn-primary btn-secondary col-6">重置</button>
                      <button type="submit" class="btn btn-primary btn-warning  col-6">送出</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Modal body container end -->


        <!-- Modal footer -->
        <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div> -->

      </div>
    </div>
  </div>
  <div class="modal" id="myModal-2">
    <div class="modal-dialog">

      <img src="./img/logo1.png" alt="" width="120%">

      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

    </div>
  </div>

  <?php
  include "./inc/footer.php"
  ?>
  <div class=" mt-5 col-md-5 col footer-pages" style="border-left:5px solid white">
    <ul class="pages">
      <li>
        <a class="footer-header" href="#">關於我們</a>
      </li>
      <li>
        <a href="#">起源</a>
      </li>
      <li>
        <a href="#origin">目標</a>
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