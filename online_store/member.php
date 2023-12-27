<?php
include_once "./api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>會員中心</title>
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


    h3>p {
      font-size: 20px;
      line-height: 30px;
    }

    .footer {
      margin-top: 0px;

    }

    .logout {

      width: 295px !important;
      margin-left: 0px !important;

    }

    .modal input[type='submit'] {
      margin-left: 408px !important;
    }
    .modal-body>.delete{
      font-size: large;
      font-weight: bold;
      color:crimson;
      margin-top:28px;
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
      }

      .box>p {
        margin-left: 130px !important;
        margin-bottom: 30px !important;
      }

      .btn-group {
        margin-left: 110px !important;
      }

      .logout {
        width: 325px !important;
        margin-left: -1px !important;
      }


      .modal .input-group {

        width: 450px !important;

      }

      .modal input[type='submit'] {
        margin-left: 350px !important;
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
        margin-left: -13px !important;
        width: 325px !important;
      }

      .box>p {
        margin-left: 130px !important;
        margin-bottom: 30px !important;
      }

      .btn-group {
        margin-left: 110px !important;
        margin-left: 96px !important;
      }

      .logout {

        width: 325px !important;
        margin-left: -14px !important;
      }

      .modal .input-group {

        width: 330px !important;

      }

      .modal input[type='submit'] {
        margin-left: 270px !important;
      }
    }
  </style>
</head>


<body>
  <?php
  if (!isset($_SESSION['user'])) {

    header("location:add.php");
  }
  ?>
  <?php
  include "./inc/header_aboutUs_articles.php"
  ?>
  <!-- ---- -->
  <div class="container-fluid">
    <div class="row d-flex main">
      <div class="col-5 aside">

      </div>

      <div class="col-12 col-sm-6  section ms-5 ps-5">
        <br>
        <div class="box mt-5 text-center">

          <?php


          echo '<p style="font-size:30px">歡迎光臨！' . $_SESSION["user"] . '💛</p>';

          echo '<p class="mt-4" style="font-size:25px;font-weight:bold;text-align:center">使用者資料</p>';

          if (isset($_SESSION['msg'])) {
            echo "<div class='alert alert-warning text-center col-4 m-auto'>";
            echo $_SESSION['msg'];
            // 只出現一次，這樣重整不會再出現
            unset($_SESSION['msg']);
            echo "</div>";
          }
          // $sql = "select * from users where `acc`='{$_SESSION['user']}'";
          // $user = $pdo->query($sql)->fetch();
          // $user=find('users',['acc'=>"{$_SESSION['user']}"]);
          $user = $User->find(['acc' => "{$_SESSION['user']}"]);
          ?>
          <form action="./api/update.php" method="post" class="col-4 m-auto pt-3">
            <div class="input-group my-1">
              <label class="col-4  input-group-text mt-3 w-100">帳號:</label>
              <input class="form-control" type="text" name="acc" id="acc" value="<?= $user['acc']; ?>">
            </div>
            <div class="input-group my-1">
              <label class="col-4  input-group-text mt-3 w-100">密碼:</label>
              <input class="form-control" type="password" name="pw" id="pw" value="<?= $user['pw']; ?>">
            </div>
            <div class="input-group my-1">
              <label class="col-4  input-group-text mt-3 w-100">姓名:</label>
              <input class="form-control" type="text" name="name" id="name" value="<?= $user['name']; ?>">
            </div>
            <div class="input-group my-1">
              <label class="col-4  input-group-text mt-3 w-100">電子郵件:</label>
              <input class="form-control" type="text" name="email" id="email" value="<?= $user['email']; ?>">
            </div>
            <div class="input-group my-1">
              <label class="col-4  input-group-text mt-3 w-100">居住地:</label>
              <input class="form-control" type="text" name="address" id="address" value="<?= $user['address']; ?>">
            </div>
            <div class="btn-group">
              <!-- 加入ID傳值以便update-php能在資料庫抓到對應的ID進行修改 -->
              <input class="form-control" type="hidden" name="id" id="id" value="<?= $user['id']; ?>">
              <input class="btn btn-secondary mx-2 mt-5 " style="border-radius:5px 0 0 5px" type="reset" value="重置">
              <input class="btn btn-warning mx-2 mt-5  myBtn" type="submit" value="更新" onclick="submitInnerData()">
              <!-- 比較進階的做法 -->
              <input class="btn btn-danger mx-2 mt-5" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal" type="button" value="刪除">
            </div>
            <a href='./api/logout.php' class='btn logout btn-warning mt-4 col-9 mx-2'>登出</a>
          </form>
          <br><br><br>
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


            <form action="/action_page.php">

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
                      <button type="reset" class="btn btn-secondary  myBtn-gold btn-secondary col-6">重置</button>
                      <button type="submit" class="btn btn-warning myBtn-brown btn-warning  col-6">送出</button>
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

<script>
  function showDeleteConfirmModal() {
    var modal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'), {
      keyboard: false
    });

    modal.show();

    document.getElementById('confirmDeleteButton').addEventListener('click', function() {
     
      location.href = './api/del_user.php?id=<?= $user['id']; ?>';
      modal.hide();
    });
  }
</script>


<div class="modal" id="deleteConfirmModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <!-- <div class="modal-header">
        <h5 class="modal-title">確認刪除</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div> -->

      <!-- Modal Body -->
      <div class="modal-body">
        <p class="delete">確定要刪除嗎？資料會一去不復返喔！</p>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
        <a href='./api/del_user.php?id=<?= $user['id']; ?>'><button type="button" id="confirmDeleteButton" class="btn btn-danger">確認</button></a>
      </div>
    </div>
  </div>
</div>

</body>

</html>