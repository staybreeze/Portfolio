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
  <title>奇多喵合作社/後台/商品管理</title>

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
          <h2 class="title">商品管理</h2>
          <h4 class="mt-5 color-gray" style="margin-left:95px">新增</h4>

          <form action="../api/back_goods.php" method="post" class="mt-5" enctype="multipart/form-data">
    
    <div class="container good-border">
      <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-6">
  
        </div>
        <div class="col-5">
          <h5 class="">選擇新圖片</h5>
          <input type="file" name="img" id="">
        </div>
      </div>

      <div class="row">
        <div class="col-1">
          <div class="input-group mb-3">

            <span class="input-group-text bold">ID</span>
            <input type="text" class="form-control" name="id" value="" disabled>
<input type="hidden" name="id" value="">
          </div>
        </div>
        <div class="col-6">
          <div class="input-group mb-3">

            <span class="input-group-text bold">商品名稱</span>
            <input type="text" class="form-control" name="name[]" value="">

          </div>
        </div>

        <div class="col-3">
          <div class="input-group mb-3">

            <span class="input-group-text bold">數量</span>
            <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px" name="quatity[]" id="" value="">

          </div>
        </div>

        <div class="col-2 pe-5">
          <div class="input-group mb-3 mt-2">

            <label for="" class="fs-6">是否為新品</label>
            <input type="checkbox" style="border:1px solid gray;margin-left:20px" name="new[]" value="" >

          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
          <div class="input-group mb-3">

            <span class="input-group-text bold">舊價格</span>
            <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px" name="old_price[]" id="" value="">

          </div>
        </div>

        <div class="col-3 pe-2">
          <div class="input-group mb-3 discount">

            <span class="input-group-text bold">折扣數</span>
            <input type="number" style="border:1px solid lightgray; " placeholder="" name="discount[]" id="" value="">
            <span style="padding: 8px; background-color: lightgray;border-radius:0px 5px 5px 0px">%</span>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group mb-3">

            <span class="input-group-text bold">新價格</span>
            <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px" name="price" value="" id="" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;舊價格 x 折扣數">

          </div>
        </div>

      </div>
    </div>
    <input class="btn myBtn mt-2" style="margin-left:1350px " type="submit" value="送出">

</form>
          <h4 class="mt-5 color-gray" style="margin-left:95px">編輯</h4>
        <?php

            $goods = $Good->all();
            foreach ($goods as  $good) {

            ?>
          <form action="../api/back_goods.php" method="post" class="mt-5 mb-5" enctype="multipart/form-data">
    
              <div class="container good-border">
                <div class="row mt-3">
                  <div class="col-1"></div>
                  <div class="col-6">
                    <h5 class="">上架中的圖片</h5>
                    <img src="../img/<?= $good['img']; ?>" width="100px" height="60%">
                  </div>
                  <div class="col-5">
                    <h5 class="">選擇新圖片</h5>
                    <input type="file" name="img" id="">
                  </div>
                </div>

                <div class="row">
                  <div class="col-1">
                    <div class="input-group mb-3">

                      <span class="input-group-text bold">ID</span>
                      <input type="text" class="form-control" name="id" value="<?= $good['id']; ?>" disabled>
<input type="hidden" name="id" value="<?= $good['id']; ?>">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="input-group mb-3">

                      <span class="input-group-text bold">商品名稱</span>
                      <input type="text" class="form-control" name="name[]" value="<?= $good['name']; ?>">

                    </div>
                  </div>

                  <div class="col-3">
                    <div class="input-group mb-3">

                      <span class="input-group-text bold">數量</span>
                      <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px" name="quatity[]" id="" value="<?= $good['quatity']; ?>">

                    </div>
                  </div>

                  <div class="col-2 pe-5">
                    <div class="input-group mb-3 mt-2">

                      <label for="" class="fs-6">是否為新品</label>
                      <input type="checkbox" style="border:1px solid gray;margin-left:20px" name="new[]" value="<?= $good['id']; ?>" <?= ($good['new'] == 1) ? 'checked' : ''; ?>>

                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-3">
                    <div class="input-group mb-3">

                      <span class="input-group-text bold">舊價格</span>
                      <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px" name="old_price[]" id="" value="<?= $good['old_price']; ?>">

                    </div>
                  </div>

                  <div class="col-3 pe-2">
                    <div class="input-group mb-3 discount">

                      <span class="input-group-text bold">折扣數</span>
                      <input type="number" style="border:1px solid lightgray; " placeholder="" name="discount[]" id="" value="<?= $good['discount']; ?>">
                      <span style="padding: 8px; background-color: lightgray;border-radius:0px 5px 5px 0px">%</span>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="input-group mb-3">

                      <span class="input-group-text bold">新價格</span>
                      <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px" name="price" value="<?= $good['price']; ?>" id="" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;舊價格 x 折扣數">

                    </div>
                  </div>

                </div>
              </div>
   
                <div class="d-flex">
              <a href="../api/back_goods.php?del=<?=$good['id'];?>"><input class="btn btn-danger mt-2" type="button"style="margin-left:1280px " value="刪除"></a>
              <input class="btn myBtn mt-2" style="margin-left:20px " type="submit" value="送出">
</div>
          </form> <?php
                }
                  ?>
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