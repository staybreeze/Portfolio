<?php
include_once "header_effect.php"
?>
<header class="h-11 bg-gray container-fluid header  hide-header" id="header">
  <div class="row bg-gray">

    <div class="test col-xxl-2 col-xl-6 col-12 ms-3 logo-area">
      <a href="../index.php" data-bs-toggle="modal" data-bs-target="#myModal-2">
        <img class="logo" src="../img/logo1.png" alt="" width="85%" height="100%"></a>
    </div>
    <div class="test col-xxl-2 col-xl-6 col-12 mt-4 pt-3 header-title">

      <a href="../index.php">
        <h2 style="font-weight:600;">奇多喵合作社</h2>
      </a>

    </div>
    <div class="col-xxl-4 col-xl-12 col-12 test-1 pt-5 header-group">
      <div class="page-link ">

        <ul>
          <li class="nav-item me-3">
            <a href="../index.php">回首頁</a>
            <div class="unloading-bar"></div>
            <div class="loading-bar"></div>
          </li>
          <li class="nav-item  me-3" style="margin-left:36px">
            <a href="../articles.php">回上一頁</a>
            <div class="unloading-bar"></div>
            <div class="loading-bar"></div>
          </li>

          <li class="nav-item" style="margin-left:36px">


            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal">

              <?php
              if (isset($_SESSION['user'])) {
                echo "<span> <a href='../api/logout.php'>登出</a></span>
            <div class='unloading-bar'></div>
            <div class='loading-bar'></div>
       ";
              } else {


                echo '<span> 會員登入</span>
              <div class="unloading-bar"></div>
              <div class="loading-bar"></div>';
              }
              ?>

            </a>

          </li>
        </ul>

      </div>

    </div>

    <div class="col-xxl-1 col-xl-2 col-2 pt-4 test buy-icon" style="margin-top:8px;margin-left:37px">
      <a class="shopping-cart-a" target="_blank" href="">
        <a href="../cart.php"> <i class="fa-sharp fa-solid fa-cart-shopping shopping-cart fa-l" style="  font-size: 2em;"></i></a>
        <p class="mt-1 shopping-cart-p">Buy it !</p>
      </a>

    </div>


    <div class="test col-xxl-1 col-xl-2 col-2 pt-4  member-icon" style="margin-top:8px;margin-left:37px">

      <div class="offcanvas offcanvas-end" id="demo">
        <div class="offcanvas-header"  style="background-color:#12304a;text-align:center;padding-top:28px;color:#fff">
          <h2 class="offcanvas-title">會員中心<img class="mb-3" src="../img/logo1.png" alt="" width="60px"></h2>

          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <div class="modal-header">
            <h4 class="modal-title"></h4>


          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <!-- 插入程式碼要有頭跟END，方便日後維護及辨識 -->
            <!-- Modal body container.. -->
            <div class="container mt-3">

              <?php
              if (isset($_GET['error'])) {
                echo "<span style='color:red'>";
                echo $_GET['error'];
                echo "</span>";
              }

              ?>
              <form action="../api/login.php" method="post">
                <?php
                if (!isset($_SESSION['user'])) {
                  echo '
                <div class="row">

                  <div class="col-12">
                    <div class="input-group mb-3 mt-4">

                      <span class="input-group-text bold">帳號</span>
                      <input type="text" class="form-control" placeholder="Account123" name="acc">

                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="input-group mb-3">
                      <span class="input-group-text bold">密碼</span>
                      <input type="password" class="form-control" placeholder="****" name="pw">

                    </div>
                  </div>
                  <a href="../add.php" style="text-align:left;text-decoration:underline;color:cadetblue">加入會員</a>
                </div>

                <div class="row mt-5">
                  <div class="col-12 mt-1">
                    <div class="">
                      <div class="d-flex gap-2">
                        <button type="reset" class="btn btn-primary btn-secondary col-6">重置</button>
                        <button type="submit" class="btn btn-primary btn-warning  col-6">送出</button>
                      </div>
                    </div>
                  </div>
                </div>

         ';
                } else {

                  echo "歡迎光臨！" . $_SESSION['user'] . "💛";



                  echo "<a href='../member.php' class='btn btn-secondary mt-4 col-7 mx-2'>修改會員資料</a>";

                  echo "<a href='../api/logout.php' class='btn btn-warning mt-4 col-7 mx-2'>登出</a>";
                }
                ?>
            </div>
            </form>
            <!-- Modal body container end -->

          </div>
          <br> <br> <br> <br> <br>
          <?php
          if(isset($_SESSION['user'])){
            echo '<img class="ms-3" src="../img/cheetos21.jpg" width="300px"alt="">';

            }else{

              echo '<img class="ms-3" src="../img/cheetos15.jpg" width="300px"alt="">';
            }
          ?>
          <!-- <img class="ms-3" src="../img/cheetos15.jpg" width="300px" alt=""> -->
        </div>
      </div>
      <div>

        <i class="fa-regular fa-circle-user me-5" style=" font-size: 2em;" data-bs-toggle="offcanvas" data-bs-target="#demo"></i>

        <p class="mt-1 me-5 shopping-cart-p">Menbership</p>
      </div>
      </button>
    </div>
    <div class="col-xxl-1 col-xl-2 col-2 test pt-4 search-icon" style="margin-top:20px;margin-left:37px">
      <form class="d-flex">
        <input class="search-wrapper me-2 myInput " type="text" placeholder="Search">
        <button class="btn btn-primary rounded-pill btn-bg" style="width:130px" type="button">Search</button>
      </form>
    </div>
  </div>
</header>

<header class="h-11 bg-gray container-fluid header2 ">


  <!-- <h2  style="font-weight:600;position:absolute;margin-left:155px;padding-top:42px">奇多喵合作社</h2> -->
  <h2 style="font-weight:600;position:absolute;margin-left:145px;padding-top:42px">奇多喵合作社</h2>

  <a href="../index.php">
    <img class="logo2" src="../img/logo1.png" alt=""></a>

  <div class="header-title2">

    <a class="shopping-cart-a" target="_blank" href="">
      <a href="../cart.php"> <i class="fa-sharp fa-solid fa-cart-shopping shopping-cart fa-l" style="  font-size: 2em;"></i></a>
      <p class=" shopping-cart-p ps-1">Buy it !</p>
    </a>

  </div>



  <div class="header-title3 ms-2 pb-2 ps-3 pt-1">





    <?php

    if (isset($_SESSION['user'])) {
      echo '<a href="../member.php"><i class="fa-regular fa-circle-user ms-3" style="font-size: 2em;"></i></a>';
    } else {
      echo '<i class="fa-regular fa-circle-user ms-3" style="font-size: 2em;"  data-bs-toggle="modal" data-bs-target="#myModal"></i>';
    }
    ?>



    <p class="mt-1 me-5 shopping-cart-p">Menbership</p>

  </div>

  </div>


  <nav class="nav-box">
    <input type="checkbox" id="menu">
    <label for="menu" class="line">
      <div class="menu"></div>
    </label>

    <div class="menu-list">
      <div class="page-link ">

        <ul>
          <li class="nav-item me-3">
            <a href="../index.php">回首頁</a>
            <div class="unloading-bar"></div>
            <div class="loading-bar"></div>
          </li>
          <li class="nav-item me-3">
            <a href="../articles.php">回上一頁</a>
            <div class="unloading-bar"></div>
            <div class="loading-bar"></div>
          </li>
          <?php
          if (isset($_SESSION['user'])) {
            echo "<li>
                <span> <a href='../api/logout.php'>登出</a></span>
            <div class='unloading-bar'></div>
            <div class='loading-bar'></div>
       </li>
       ";
          }

          ?>

          </a>

          </li>
        </ul>

      </div>
      <div class="page-link-min">

        <ul>
          <li class="nav-item me-3">
            <a href="../index.php">回首頁</a>
            <div class="unloading-bar"></div>
            <div class="loading-bar"></div>
          </li>
          <li class="nav-item me-3">
            <a href="../articles.php">回上一頁</a>
            <div class="unloading-bar"></div>
            <div class="loading-bar"></div>
          </li>
          <?php
          if (isset($_SESSION['user'])) {
            echo "<li>
          <span> <a href='../api/logout.php'>登出</a></span>
      <div class='unloading-bar'></div>
      <div class='loading-bar'></div>
 </li>
 ";
          }

          ?>

          </a>

          </li>
        </ul>

      </div>
    </div>
  </nav>

</header>