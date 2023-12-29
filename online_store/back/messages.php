


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
  <title>奇多喵合作社/後台/留言管理</title>
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
    .underline{
      text-decoration: underline;
    }
    .pages{

margin-left:30px;
font-size: large;
border:3px dotted goldenrod;
color:brown;
text-decoration: none;
width:30px;
text-align: center;
}
.pages:hover{
background-color: gainsboro;
}
.ms-80{
margin-left:80px

}
a{
text-decoration: none;
color:brown;
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
          <h2 class="title">留言管理</h2>

          <?php
                $totalPrice = 0;

                $total = count($Message->all());  // 假設 $Good->all() 返回一個陣列，使用 count() 函数得到數量
                $div = 2;
                $pages = ceil($total / $div);
                $now = $_GET['p'] ?? 1;
                $start = ($now - 1) * $div;
                $rows = $Message->all('', " limit $start,$div");
      
                
             
                // if ($now > 1) {
                //   $prev = $now - 1;
                //   echo "<div  style='diaplay:margin-left:95px><div' class='pages'><a href='?do=goods&p=$prev'> < </a></div>";
                // }
      echo "<div class='d-flex ms-80 mt-5'>";
                for ($i = 1; $i <= $pages; $i++) {
                  // $fontsize = ($now == $i) ? '24px' : '16px';
           
                  echo "<a href='?do=goods&p=$i' style='font-size:'><div class='pages ms-3'> $i</div> </a>";
            
                }
                // if ($now < $pages) {
                //   $next = $now + 1;
                //   echo "<div  class='pages'><a href='?do=goods&p=$next'> > </a></div></div>";
                // }
               
                echo "</div>";
      
      


                foreach ($rows as $row) {
                  // 獲得當前USER的CART


?>
          <form method="post" action="../api/message.php" style="margin-left:95px;margin-top:50px">
            <table>


            
              <tr>
<?php

                  echo "<p style='font-size:20px'>寄信人:<span class='underline'> {$row['sender']}</span></p>";


                  echo '<table>';
                  echo '<tr class="th-update text-center" style="height:30px">
            <th style="width:8%;background-color:#f8ede0">主旨</th>

            <th style="width:30% ;background-color:#f8ede0">內容</th>

            <th style="width:10%;background-color:#f8ede0">刪除</th>
          </tr>';



                    echo '<tr>';
                    echo "<td style='padding-top:23px'>{$row['subject']}</td>";
                   
                    echo "<td style='padding-top:23px'>{$row['text']}</td>";
                    echo "<td><a href='../api/message.php?id={$row['id']}'><input class='btn btn-danger mt-3' type='button' value='刪除'></a></td>";
                  


                  echo '</table>';



                ?>



            </table>
            <table>
<br>
              <tr>


                <div class="d-flex">
                <!-- <input class="btn myBtn mt-5" style="margin-left:1305px " type="submit" value="修改"> -->
                  
                </div>
                <hr>
              </tr>

            </table>
  

          </form>

                <?php
                
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