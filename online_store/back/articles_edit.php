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
  <title>奇多喵合作社/後台/文章管理/新增</title>
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

    .ms-95 {
      margin-left: 95px;

    }

    .color-brown {
      color: goldenrod;
      font-size: 20px;
    }

    .dotted-border {
      border: 1px dotted brown;
    }

    a{
      text-decoration: none;
    }
    .color-blue{
      color:cadetblue;
      /* border:3px dotted goldenrod; */
      font-weight: bold;
    }
    .w-95{
      width: 95%;
      text-align: center;
      margin: auto;
    }
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

        <div class="container-fluid mt-3 ">
          <h2 class="title">文章管理</h2>
          <div class="d-flex">

<a href="./articles.php?do=articles&&add"><h4 class="mt-5 color-gray ms-95 mb-4 ">新增</h4></a>
<?php
            if(isset($_GET['edit'])){
          echo    '<a href="./articles.php?do=articles&&add"><h4 class="mt-5 color-blue ms-4 mb-4 ">編輯</h4></a>';
            }else{
              echo    '<a href="./articles.php?do=articles&&edit"><h4 class="mt-5 color-gray ms-4 mb-4 ">編輯</h4></a>';
            }
            
            ?>
          </div>
          <div class="dotted-border ms-95">
        
          <?php

                $rows = $Article->all();

                foreach ($rows as $row) {
                  // 獲得當前USER的CART


?>
          <form method="post" action="../api/message.php" >
            <table class="mt-3 w-95" >


            
              <tr>
<?php

      

       
                  echo '<tr class="th-update text-center" style="height:30px">
     
            <th style="width:40%;background-color:#f8ede0">圖片</th>

            <th style="width:40% ;background-color:#f8ede0">主旨</th>

            <th style="width:10%;background-color:#f8ede0">編輯</th>
            <th style="width:10%;background-color:#f8ede0">刪除</th>
          </tr>';



                    echo '<tr>';
                
                   
                    echo "<td style='padding-top:23px'><img src='../img/{$row['img']}' width='300px' class='mb-3'></td>";
                    echo "<td style='padding-top:23px'>{$row['content']}</td>";
                    echo "<td><a href='article_editing.php?do=articles&&edit&&id={$row['id']}'><input class='btn btn-secondary mt-5 mb-5' type='button' value='編輯'></a></td>";
                    echo "<td><a href='../api/back_del_article.php?id={$row['id']}&&time={$row['time']}'><input class='btn btn-danger mt-5 mb-5' type='button' value='刪除'></a></td>";


                  echo '</table>';



                ?>


          </form>

                <?php
                
                }
          ?>  
        </div>
<br<br><br>
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