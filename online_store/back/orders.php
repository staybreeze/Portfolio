<?php
include_once "../api/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>奇多喵合作社/後台/訂單管理</title>
  <link rel="icon" href="../img/logo3.jpg" type="image/x-icon">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .good-border {
      border: 1px dotted brown;
    }

    table,
    tr {
      width: 100%;
    }

    td {
      text-align: center;
      border: none;
    }

    .th {
      height: 40px
    }

    .th-add>td {

      background-color: wheat;
      font-size: 15px;
      font-weight: bold;
      color: #727272;
    }

    .th-update>td {

      background-color: wheat;
      font-size: 15px;
      font-weight: bold;
      color: #727272;

    }

    td>input {
      width: 100%;
    }

    .total-price {
      margin-left: 30px;
      font-size: 20px;
      color: crimson;
    }

    .user-total-price {
      color: brown;
      font-size: 20px;
    }

    .underline {
      text-decoration: underline;
    }

    .pages {

      margin-left: 30px;
      font-size: large;
      border: 3px dotted goldenrod;
      color: brown;
      text-decoration: none;
      width: 30px;
      text-align: center;
    }

    .pages:hover {
      background-color: gainsboro;
    }

    .ms-80 {
      margin-left: 80px
    }

    a {
      text-decoration: none;
      color: brown;
    }

    .gold-border {
      border: 2px dotted burlywood;
      border-left: 15px solid burlywood;
      text-align: left;

    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../css/back.css" rel="stylesheet">
</head>

<body>
<?php
      include_once "../inc/mouse_squares.php";
  ?>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../back.php"><img src="../img/logo1.png" width="60px" alt="">
      <h3 style="font-weight:bold">奇多喵合作社</h3>
    </a>
    <!-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-90" type="text" placeholder="Search" aria-label="Search"> -->
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="../api/logout.php">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">

      <?php
      include_once "../inc/back_nav.php"
      ?>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- content -->

        <div class="container-fluid mt-3">
          <h2 class="title">訂單管理</h2>
          <?php

          $customerAccArray = array_column($Customer->all('customer_acc'), 'customer_acc');
          $uniqueCustomerAccArray = array_unique($customerAccArray);

          $totalOrders = count($uniqueCustomerAccArray);
          echo "<div class='gold-border mt-5' style='margin-left:95px'><p class='total-price mt-3'><b>訂單數：共<span class='underline'> {$totalOrders} </span>筆</b></p>";
          echo "<p class='total-price' id='totalPrice'><b>總訂單金額：<span class='underline'></span>元</p>";
          echo "<p class='total-price' id='totalPrice'>目前折扣活動：【<span style='text-decoration:underline'>滿5000元，打8折～</span>】</p></div>";
          ?>

          <?php
          // $totalPrice = 0;
          // $user = $User->all();

          // $customerAccArray = array_column($Customer->all('customer_acc'), 'customer_acc');
          // $uniqueCustomerAccArray = array_unique($customerAccArray);
          // $total = count($uniqueCustomerAccArray);
          $totalPrice = 0;
          $users = $User->all();


          //       foreach ($user as $userInfo) {
          // if (isset($userInfo['acc'])) {
          //     $accValue = $userInfo['acc'];
          //     // 在這裡你可以使用 $accValue 做進一步的處理
          //     echo "User acc: $accValue <br>";
          // } else {
          //     // 如果 "acc" 鍵不存在，進行相應的處理，例如給一個默認值或顯示錯誤信息
          //     echo "Error: 'acc' key not found in user info.<br>";
          // }}
          //       // 獲取所有不同 customer_acc 的數量
          //       $total = count($Customer->all(['customer_acc' => $userInfo['acc']]));
          //       $div = 2;
          //       $pages = ceil($total / $div);
          //       $now = $_GET['p'] ?? 1;
          //       $start = ($now - 1) * $div;
          //       $users = $User->all('', " limit $start,$div");



          //       // if ($now > 1) {
          //       //   $prev = $now - 1;
          //       //   echo "<div  style='diaplay:margin-left:95px><div' class='pages'><a href='?do=goods&p=$prev'> < </a></div>";
          //       // }
          //       echo "<div class='d-flex ms-80 mt-5'>";
          //       for ($i = 1; $i <= $pages; $i++) {
          //         // $fontsize = ($now == $i) ? '24px' : '16px';

          //         echo "<a href='?do=orders&p=$i' style='font-size:'><div class='pages ms-3'> $i</div> </a>";
          //       }
          //       // if ($now < $pages) {
          //       //   $next = $now + 1;
          //       //   echo "<div  class='pages'><a href='?do=goods&p=$next'> > </a></div></div>";
          //       // }

          //       echo "</div>";


          foreach ($users as $user) {


            // 尋找符合條件的資料
            $cart = $Customer->all(['customer_acc' => $user['acc']], 'ORDER BY product_id ASC');

            // if (!$cart) {
            //   echo "Query failed.";}

            // } else {
            //     echo "<pre>";
            //     print_r($cart);
            //     echo "<pre>";

            // }

            if ($cart) {

              $userTotalPrice = 0;
          ?>
              <form method="post" action="../api/back_orders.php" style="margin-left:95px;margin-top:50px">
                <table>
                  <tr>
                    <?php
                    echo "<p style='font-size:20px;font-weight:400'>訂單帳號：<span class='underline'>{$user['acc']}</span></p>";
                    echo "<input type='hidden' name='acc' value='{$user['acc']}'>";

                    echo '<table class="table">';
                    echo '<tr class="th-update text-center" style="height:30px">
                          <th style="width:8%;background-color:#f8ede0">ID</th>
                          <th style="width:10% ;background-color:#f8ede0">圖片</th>
                          <th style="width:30% ;background-color:#f8ede0">商品</th>
                          <th style="width:10%;background-color:#f8ede0">單價</th>
                          <th style="width:10%;background-color:#f8ede0">數量</th>
                          <th style="width:10%;background-color:#f8ede0">小計</th>
                          <th style="width:10%;background-color:#f8ede0">刪除</th>
                        </tr>';

                    foreach ($cart as $cartItem) {
                      $row = $Good->find(['id' => $cartItem['product_id']]);

                      echo '<tr>';
                      echo "<td>{$row['id']}</td>";
                      echo "<td><img src='../img/{$row['img']}' width='50px' alt=''></td>";
                      echo "<td>{$row['name']}</td>";
                      echo "<td class='price'>{$row['price']}</td>";
                      echo "<td><input type='number' style='text-align:center' class='quantity-input' name='number[]' value='{$cartItem['quantity']}'></td>";
                      echo "<input type='hidden' name='name[]' value='{$row['id']}'>";
                      $total = $cartItem['quantity'] * $row['price'];
                      echo "<td class='subtotal' id='subtotal_{$user['acc']}_{$row['id']}'>{$total}</td>";

                      echo "<td><a href='../api/del_good.php?id={$row['id']}&user={$user['acc']}&quantity={$cartItem['quantity']}'><input class='btn btn-danger mt-3' type='button' value='刪除'></a></td>";
                      echo '</tr>';
                      $userTotalPrice += $total;
                    }

                    echo '</table>';
                    echo "<p style='margin-left:1100px;font-size:20px;margin-top:20px' class='user-total-price' data-username='{$user['acc']}' id='userTotal'>總計：<span class='underline total-price'>{$userTotalPrice}</span>元</p>";

                    $totalPrice += $userTotalPrice;

                    ?>

                  </tr>
                </table>
                <table>

                  <br>
                  <tr>
                    <div class="d-flex">
                      <input class="btn myBtn" style="margin-left:1310px " type="submit" value="修改">
                    </div>
                    <hr>
                  </tr>
                </table>
              </form>
          <?php
            }
          }
          ?>
        </div>

      </main>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const numberInputs = document.querySelectorAll('.quantity-input');
      const priceElements = document.querySelectorAll('.price');
      const totalElements = document.querySelectorAll('.subtotal');
      const userPriceElements = document.querySelectorAll('.user-total-price'); // 使用者總價元素的類別
      const totalPriceElement = document.getElementById('totalPrice');
      const userNames = Array.from(userPriceElements).map(element => {
        return element.getAttribute('data-username');
      });

      let itemPrices = Array.from(priceElements).map(element => parseFloat(element.innerText));
      let itemNumbers = Array.from(numberInputs).map(input => parseInt(input.value));

      function updateTotals(index) {
        // 檢查數量和價格是否是有效數字
        if (!isNaN(itemNumbers[index]) & !isNaN(itemPrices[index])) {
          let itemTotal = itemPrices[index] * itemNumbers[index];

          totalElements[index].innerText = itemTotal;

          updateGrandTotal();
          updateUserTotal();
        }
      }
      // ---與updateGrandTotal相同邏輯---
      function updateUserTotal() {
        const userNames = Array.from(userPriceElements).map(element => {
          return element.getAttribute('data-username');
        });

        userPriceElements.forEach((userPriceElement, index) => {
          let totalElementsForUser = Array.from(totalElements)
            .filter(element => {
              const userName = userNames[index];
              return element.id.startsWith(`subtotal_${userName}`);
            });

          let userTotal = totalElementsForUser
            .map(element => {
              let value = parseFloat(element.innerText);
              return isNaN(value) ? 0 : value;
            })
            .reduce((acc, value) => acc + value, 0);

          if (userTotal > 5000) {
            userTotal = Math.round(userTotal * 0.8);
          }
          userPriceElement.innerText = `<b>總計：<span class='underline'>${userTotal}</span>元</b>`;
        });
      }
      // ------

      // ---與updateUserTotal相同邏輯---
      function updateGrandTotal() {

        let grandTotal = 0;

        const userNames = Array.from(userPriceElements).map(element => {
          return element.getAttribute('data-username');
        });

        userPriceElements.forEach((userPriceElement, index) => {
          let totalElementsForUser = Array.from(totalElements)
            .filter(element => {
              const userName = userNames[index];
              return element.id.startsWith(`subtotal_${userName}`);
            });

          let userTotal = totalElementsForUser
            .map(element => {
              let value = parseFloat(element.innerText);
              return isNaN(value) ? 0 : value;
            })
            .reduce((acc, value) => acc + value, 0);


          if (userTotal > 5000) {
            userTotal = Math.round(userTotal * 0.8);
          }


          grandTotal += userTotal;
        });


        console.log(`Grand Total: ${grandTotal}`);


        totalPriceElement.innerHTML = `<b>總訂單金額：<span class='underline'>${grandTotal}</span>元</b>`;
      }

      // ------

      numberInputs.forEach((input, index) => {
        input.addEventListener('input', function() {
          // 檢查數量是否小於1，如果是，將其設置為1
          itemNumbers[index] = Math.max(1, parseInt(input.value));
          input.value = itemNumbers[index]; // 更新輸入欄位的值
          updateTotals(index);
        });
      });

      // 最初更新總計
      Array.from(totalElements).forEach((element, index) => {
        updateTotals(index);
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="../js/back.js"></script>
</body>

</html>