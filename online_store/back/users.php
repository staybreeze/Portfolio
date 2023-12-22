<?php
include_once "../api/db.php"
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>奇多喵合作社/後台/會員管理</title>

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
  </style>

  </style>


  <!-- Custom styles for this template -->
  <link href="../css/back.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../back.php"><img src="../img/logo1.png" width="60px" alt="">
      <h3 style="font-weight:bold">奇多喵合作社</h3>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-90" type="text" placeholder="Search" aria-label="Search">
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
          <h2 class="title">會員管理</h2>
          <h4 class="mt-5 color-gray" style="margin-left:95px">新增</h4>

          <form method="post" action="../api/back_users.php" style="margin-left:95px">
            <table>

              <tr class="th-add">
                <td style="width:10%">帳號</td>
                <td style="width:10%">密碼</td>
                <td style="width:10%">名字</td>
                <td style="width:30%">地址</td>
                <td style="width:30%">信箱</td>
       
              </tr>

              <tr>
                <td>

                  <input type="text" name="acc[]" value="">
                </td>
        <input type="hidden" name="id[]">
                <td>
                  <!-- 
                                $_POST['sh'][0] => "1"
                                $_POST['sh'][1] => "3" 
                            -->

                  <!-- 生成一個checked的陣列 -->

                  <input type="password" name="pw[]" value="">
                </td>
                <td>

                  <input type="text" name="name[]" value="">
                </td>
                <td>

                  <input type="text" name="address[]" value="">
                </td>

                <td>

                  <input type="text" name="email[]" value="">
                </td>
    
              </tr>


            </table>
            <table>

              <tr>


                <div class="d-flex">

                  <input class="btn myBtn-gold mt-5" style="margin-left:1335px " type="submit" value="送出">
                </div>
              </tr>

            </table>
            <hr>
          </form>


          <h4 class="mt-5 color-gray" style="margin-left:95px">編輯</h4>
          <form method="post" action="../api/back_users.php" style="margin-left:95px">
            <table>

              <tr class="th-update">
                <td style="width:10%">帳號</td>
                <td style="width:10%">密碼</td>
                <td style="width:10%">名字</td>
                <td style="width:30%">地址</td>
                <td style="width:30%">信箱</td>
                <td style="width:10%">刪除</td>
              </tr>
              <?php
              // 先從資料庫撈資料
              // $DB=${ucfirst($do)};->已在DB設變數，因此可刪
              $rows = $User->all();
              // $rows = $Ad->all();
              foreach ($rows as $row) {
              ?>
                <tr>
                  <td>

                    <input type="text" name="acc[]" value="<?= $row['acc']; ?>">
                  </td>
                  <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                  <td>
                    <!-- 
                                $_POST['sh'][0] => "1"
                                $_POST['sh'][1] => "3" 
                            -->

                    <!-- 生成一個checked的陣列 -->

                    <input type="password" name="pw[]" value="<?= $row['pw']; ?>">
                  </td>
                  <td>

                    <input type="text" name="name[]" value="<?= $row['name']; ?>">
                  </td>
                  <td>

                    <input type="text" name="address[]" value="<?= $row['address']; ?>">
                  </td>

                  <td>

                    <input type="text" name="email[]" value="<?= $row['email']; ?>">
                  </td>
                  <td>
                    <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                  </td>
                </tr>
              <?php
              }
              ?>

            </table>
            <table>

              <tr>


                <div class="d-flex">
             
                  <input class="btn myBtn mt-5" style="margin-left:1335px " type="submit" value="送出">
                </div>
                <hr>
              </tr>

            </table>

          </form>
        </div>

    </div>

  </div>



  <!-- content end -->
  </main>
  </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="../js/back.js"></script>
</body>

</html>