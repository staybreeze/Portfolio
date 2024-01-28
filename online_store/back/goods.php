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
  <link rel="icon" href="../img/logo3.jpg" type="image/x-icon">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
      background-color: beige;
    }

    .currentPage {
      background-color: beige;
      margin-left: 30px;
      font-size: large;
      border: 3px dotted goldenrod;
      color: brown;
      text-decoration: none;
      width: 30px;
      text-align: center;

    }

    .ms-80 {
      margin-left: 94px
    }

    a {
      text-decoration: none;
      color: brown;
    }

    input {
      text-align: center;
    }

    .show {
      display: block !important;
    }

    .sho2 {
      display: block !important;
    }

    .hidden {
      display: none;
    }

    .dotted-border {
      border: 1px dotted brown;
    }

    .dotted-line {
      font-size: larger;
      padding-top: 10px;
      margin-left: 15px;
      border-bottom: 3px dotted goldenrod;
      width: 30px
    }
  </style>

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


            <div class="container dotted-border">
              <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-7">

                </div>
                <div class="col-4">
                  <h5>選擇圖片</h5>
                  <input type="file" name="img" class="mb-4 mt-3">
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

                <div class="col-2 ms-4">
                  <div class="input-group mb-3 ms-3">

                    <span class="input-group-text bold">數量</span>
                    <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:100px" name="quantity[]" id="" value="">

                  </div>
                </div>

                <div class="col-2 pe-5">
                  <div class="input-group mb-3 mt-2 ms-3">

                    <label for="" class="fs-6">是否為新品</label>
                    <input type="checkbox" style="border:1px solid gray;margin-left:20px" name="new[]" value="">

                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-1"></div>
                <div class="col-2">
                  <div class="input-group mb-3">

                    <span class="input-group-text bold">原價</span>
                    <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:110px" name="old_price[]" id="" value="">

                  </div>
                </div>

                <div class="col-2 ms-3">
                  <div class="input-group mb-3 discount">

                    <span class="input-group-text bold">折扣</span>
                    <input type="number" style="border:1px solid lightgray;width:78px " placeholder="" name="discount[]" id="" value="">
                    <span style="padding: 8px; background-color: lightgray;border-radius:0px 5px 5px 0px">%</span>
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group mb-3" style="margin-left:14px">

                    <span class="input-group-text bold">售價</span>
                    <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:110px" name="price" value="" id="" placeholder="原價 x 折扣數" disabled>

                  </div>
                </div>

                <div class="col-2 ms-4">
                  <div class="input-group mb-3" style="height:38px">

                    <span class="input-group-text bold">

                      <i class="fa-sharp fa-solid fa-boxes-stacked"></i>
                    </span>
                    <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:115px;text-align:center" value="">

                  </div>
                </div>

                <div class="col-2">
                </div>
              </div>

            </div>
        </div>
        <input class="btn myBtn-gold mt-2" style="margin-left:1350px " type="submit" value="送出">

        </form>
        <h4 class="mt-5 color-gray" style="margin-left:107px" id="edit">編輯</h4>
        <?php
        $total = count($Good->all());  // 假設 $Good->all() 返回一個陣列，使用 count() 函数得到數量
        $div = 1;
        $pages = ceil($total / $div);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $div;
        $goods = $Good->all('', " limit $start,$div");



        // if ($now > 1) {
        //   $prev = $now - 1;
        //   echo "<div  style='diaplay:margin-left:95px><div' class='pages'><a href='?do=goods&p=$prev'> < </a></div>";
        // }


        echo "<div class='d-flex mt-4 me-1' style='margin-left:69px'>";
        $firstPage = ($now - 1 != 0) ? ($now - 1) : 1;
        $hiddenFirstPage = ($now == $firstPage) ? 'hidden' : '';
        echo "<a href='?do=goods&p=$firstPage'><div class='pages ms-5  $hiddenFirstPage'> <</div> </a>";


        for ($i = 1; $i <= $pages; $i++) {
          // $fontsize = ($now == $i) ? '24px' : '16px';
          $currentPage  = ($now == $i) ? 'currentPage' : 'pages';
          $hidden  = ($i != $now) ? 'hidden' : '';
          $show  = ($i == $now + 1 || $i == $now - 1) ? 'show' : '';
          $show2  = ($i == $now + 2 && $now + 2 == $pages) ? 'show' : '';
          $ms5 = ($i == 1 && $now == $firstPage) ? 'ms-5' : '';
          echo "<a href='?do=goods&p=$i'><div class=' $ms5 $currentPage $hidden $show $show2 ms-3'> $i</div> </a>";
        }
        // if ($now < $pages) {
        //   $next = $now + 1;
        //   echo "<div  class='pages'><a href='?do=goods&p=$next'> > </a></div></div>";
        // }
        $lastPage = ($pages == $now) ? $now : ($now + 1);

        $hiddenLastPage = ($now == $pages - 1 || $now == $pages || $now == $pages - 2) ? 'hidden' : '';
        $hiddenNextPage = ($now == $pages) ? 'hidden' : '';
        echo "<div class='dotted-line $hiddenLastPage'></div>";
        echo "<a href='?do=goods&p=$pages'><div class='pages  $currentPage $hiddenLastPage ms-3'> $pages</div> </a>";

        echo "<a href='?do=goods&p=$lastPage'><div class='pages ms-3 $hiddenNextPage'> ></div> </a>";


        echo "</div>";

        foreach ($goods as $good) {
          // 循環內容



        ?>

          <form action="../api/back_goods.php" method="post" class="mt-2 mb-5" enctype="multipart/form-data">

            <div class="container dotted-border">
              <div class="row mt-3">
                <div class="col-1"></div>
                <div class="col-7">
                  <h5 class="">上架中的圖片</h5>
                  <img src="../img/<?= $good['img']; ?>" width="100px" height="60%">
                </div>
                <div class="col-4">
                  <h5>選擇新圖片</h5>
                  <input type="file" name="img" class="mt-4">
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

                <div class="col-2 ms-4">
                  <div class="input-group mb-3 ms-3">

                    <span class="input-group-text bold">數量</span>
                    <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:100px" name="quantity[]" id="" value="<?= $good['quantity']; ?>">

                  </div>
                </div>

                <div class="col-2 pe-5">
                  <div class="input-group mb-3 mt-2 ms-3">

                    <label for="" class="fs-6">是否為新品</label>
                    <input type="checkbox" style="border:1px solid gray;margin-left:20px" name="new[]" value="<?= $good['id']; ?>" <?= ($good['new'] == 1) ? 'checked' : ''; ?>>

                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-1"></div>
                <div class="col-2">
                  <div class="input-group mb-3">

                    <span class="input-group-text bold">原價</span>
                    <input type="number" class="old-price-edit" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:110px" name="old_price[]" id="" value="<?= $good['old_price']; ?>">

                  </div>
                </div>

                <div class="col-2 ms-3">
                  <div class="input-group mb-3 discount">

                    <span class="input-group-text bold">折扣</span>
                    <input type="number" style="border:1px solid lightgray;width:78px " placeholder="" name="discount[]" class="discount-edit" value="<?= $good['discount']; ?>">
                    <span style="padding: 8px; background-color: lightgray;border-radius:0px 5px 5px 0px">%</span>
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group mb-3" style="margin-left:14px">

                    <span class="input-group-text bold">售價</span>
                    <input type="number" class="price-edit" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:110px" name="price" value="<?= $good['price']; ?>" disabled>

                  </div>
                </div>

                <div class="col-2 ms-4">
                  <div class="input-group mb-3" style="height:38px">

                    <span class="input-group-text bold">

                      <i class="fa-sharp fa-solid fa-boxes-stacked"></i>
                    </span>
                    <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:115px;text-align:center" name="remain" value="<?= $good['remain']; ?>">

                  </div>
                </div>

                <div class="col-2">
                  <div class="input-group mb-3" style="height:38px">

                    <span class="input-group-text bold"><i class="fas fa-heart" style="color:crimson"></i></span>
                    <input type="number" style="border:1px solid lightgray; border-radius:0px 5px 5px 0px;width:38%;text-align:center" disabled value="<?= $good['like_item']; ?>">
                  </div>
                </div>

              </div>
            </div>

            <div class="d-flex">
              <input class="btn btn-danger mt-2" type="button" style="margin-left:1272px " value="刪除" onclick="location.href='../api/back_goods.php?del=<?= $good['id']; ?>'">
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
  <script>
    $(document).ready(function() {
  
      $(".old-price-edit, .discount-edit").on("input", function() {
        let container = $(this).closest(".container");
        let oldPriceEdit = parseFloat(container.find(".old-price-edit").val());
        let discountEdit = parseFloat(container.find(".discount-edit").val());

        if (!isNaN(oldPriceEdit) && !isNaN(discountEdit)) {
          let priceEdit = oldPriceEdit * (1 - discountEdit / 100);
          container.find(".price-edit").val(priceEdit.toFixed());
        }
      });
    });
  </script>
</body>

</html>