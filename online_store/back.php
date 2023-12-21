<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Dashboard Template · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
  <link href="./css/back.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"  href="back.php"><img src="./img/logo1.png" width="60px"alt=""><h3 style="font-weight:bold">奇多喵合作社</h3></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
      data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-90" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="./api/logout.php">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-5">
          <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link" href="./back/aboutUs.php?do=aboutUs">
                <span data-feather="home"></span>
                關於我們
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                文章管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./back/goods.php?do=goods">
                <span data-feather="shopping-cart"></span>
                商品管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                會員管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                訂單管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
               留言管理
              </a>
            </li>
          </ul>

          <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul> -->
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <!-- content -->

        <div class="container-fluid mt-3">
          <h2>Products</h2>
          <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>
          <div class="text-end">
            <a href="./create.html" class="btn btn-success btn-lg">&nbsp;<i class="fa-solid fa-plus"></i>&nbsp;</a>
            <!-- <button id="myBtn" type="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button> -->
          </div>
          <div class="table-responsive">
            <table class="table table-hover text-center">
              <thead>
                <tr>
                  <th width="5%">id</th>
                  <th width="20%">img_url</th>
                  <th width="30%">desc</th>
                  <th width="5%">price</th>
                  <th width="10%">unit</th>
                  <th>oprate</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="td-box">
                      1
                    </div>
                  </td>
                  <td>
                    <img src="https://picsum.photos/id/20/310/250" class="rounded" alt="Cinque Terre" width="304"
                      height="236">
                  </td>
                  <td class="text-start">
                    <div class="td-box">
                      <p class="w-100">
                        imgUrl: p1.jpg
                      </p>
                      <p class="w-100">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae rerum amet sint sunt.
                        Illo
                        tenetur similique quis fugiat fugit vero.
                      </p>
                    </div>
  
                  </td>
                  <td>
                    <div class="td-box">
                      100
                    </div>
                  </td>
                  <td>
                    <div class="td-box">
                      元
                    </div>
                  </td>
                  <td>
                    <div class="td-box-row">
                      <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                      <button type="button" class="ms-3 btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </div>
                  </td>
                </tr>
  
  
              </tbody>
            </table>
          </div>
          
        </div>

        <!-- content end -->
      </main>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
    crossorigin="anonymous"></script>
  <script src="./js/back.js"></script>
</body>

</html>