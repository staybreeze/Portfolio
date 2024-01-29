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
  <title>奇多喵合作社/後台/關於我們</title>
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
  </style>


  <!-- Custom styles for this template -->
  <link href="../css/back.css" rel="stylesheet">
</head>

<body>
<?php
      include_once "../inc/mouse_squares.php";
  ?>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"  href="../back.php"><img src="../img/logo1.png" width="60px" alt="">
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
          <h2 class="title">關於我們</h2>

          <form action="../api/back_aboutUs.php" method="post" class="mt-5">
            <h4 class="mt-5">起源</h4>
            <textarea id="comment" name="origin" style="overflow: hidden;">

<?php
$about = $About->find(1);
?>

<?= trim($about['origin']); ?>
</textarea>


            <h4 class="mt-5">目標</h4>
            <textarea id="comment" name="goal">
            <?= trim($about['goal']);; ?>

            </textarea>


            <h4 class="mt-5">店貓－奇多（Cheetos）</h4>
            <textarea id="comment" name="cheetos">

            <?= trim($about['cheetos']);; ?>
            </textarea>
            <h4 class="mt-5">上架中的圖片</h4>
            <img src="../img/<?= $about['img']; ?>" width="50%" height="50%">
            <h4 class="mt-5">選擇新圖片</h4>
            <input type="file" name="img" id="">


            <input class="btn myBtn mt-2 px-end" type="submit" value="送出">
            <div class="mt-3">&nbsp;</div>
          </form>

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