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

    table {
      width: 100vw;
      /* height:100vh; */
    }

    table,
    tr,
    td {
      border: 1px solid black;
      text-align: center;
    }

    .bg-myColor{

      background-color:#f8ede0
    }
  </style>
</head>


<body>


<?php

if(!isset($_SESSION['user'])){
  header("location:./login.php?error=請先登入會員");
}

?>
  <?php
  include "./inc/header_aboutUs_articles.php"
  ?>

  <!-- ---- -->
  <div class="container mt-5">

    <form action="" method="post">
      <table class="table">
        <tr>
          <th style="width:8%;background-color:#f8ede0">ID</th>
          <th style="width:10% ;background-color:#f8ede0">圖片</th>
          <th style="width:40% ;background-color:#f8ede0">商品</th>
          <th style="width:10%;background-color:#f8ede0">單價</th>
          <th style="width:10%;background-color:#f8ede0">數量</th>
          <th style="width:10%;background-color:#f8ede0">小計</th>
          <th style="background-color:#f8ede0">刪除</th>
        </tr>

        <?php

        // $cart = $Customer->all(['customer_id' => $_SESSION['user']]);
        // $rows = $Good->all(['id' => $cart['product_id']]);

        // // $rows = $Image->all();
        // foreach ($rows as $row) {
          $totalPrice=0;
          $cart = $Customer->all(['customer_acc' => $_SESSION['user']]);
          foreach ($cart as $cartItem) {
        
            $row = $Good->find(['id' => $cartItem['product_id']]);
    
     
            echo '<tr>';
            echo "<td style='padding-top:23px'>{$row['id']}</td>";
            echo "<td style='padding-top:23px'><img src='./img/{$row['img']}' width='50px' alt=''></td>";
            echo "<td style='padding-top:23px'>{$row['name']}</td>";
            echo "<td style='padding-top:23px'>{$row['price']}</td>";
            echo "<td style='padding-top:23px'>{$cartItem['quantity']}</td>";
            $total = $cartItem['quantity'] * $row['price'];
            echo "<td style='padding-top:23px'>{$total}</td>";
      

            ?>
            <td>
              <a href="./api/del_good.php?id=<?=$row['id'];?>"><input class="btn btn-danger mt-3" type="button" value="刪除"></a>
            </td>
          </tr>
          <?php
        $totalPrice += $total;
    }


?>
        <tr>
          <td colspan="4"  class="pt-3">總計</td>

          <td colspan="2"  class="pt-3">NTD&nbsp;&nbsp;<?= $totalPrice;?></td>
          <!-- <td></td> -->
          <!-- <td></td> -->
          <!-- <td></td>
          <td></td> -->
        </tr>


        <tr>
          <!-- <td></td>
     
          <td></td>
          <td></td>
      
          <td></td> -->
          <td colspan="5">

          </td>
          <td>
            <input class="btn btn-warning" type="submit" value="送出">
          </td>
        </tr>

      </table>
    </form>
  </div>


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