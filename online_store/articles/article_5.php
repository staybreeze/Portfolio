<?php 
include_once "../api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>文章>探索貓咪的時光隧道</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" media="screen and (max-width: 1000px)" href="../css/small_screen.css">
<link rel="stylesheet" media="screen and (max-width:1600px)" href="../css/middle_screen.css">
<link rel="stylesheet" media="screen and (min-width: 1600px)" href="../css/big_screen.css">
  <style>


    .main {
      height: 100%;
    }

    .h3 {
      border-left: 10px solid brown;
      font-weight: bolder;
    }

   
    .box>p {
      font-size: 20px;
      line-height: 40px;
    }

    .footer{
      margin-top:0px;
    }
    @media screen and (max-width: 550px) {
  .aside {
margin-left: 100px;
  }
}
@media screen and (max-width: 550px) {
  .aside>img {
width:250px;
  }
}
  </style>
</head>


<body>

<?php
include "../inc/header_article.php"
?>

  <!-- ---- -->
  <div class="container-fluid">
    <div class="row d-flex main">
      <div class="col-5 aside">
<img src="../img/cat2.jpeg" alt="" width="100%" style="padding-top:70px ;">
      </div>

      <div class="col-6 section ms-5 ps-5">
        <br>
        <div class="box mt-5">
          <h3 class="h3">&nbsp;探索貓咪的時光隧道</h3>
          <p class="mt-5" id="origin">
            在探索貓咪的時光隧道中，我們隨著牠們一同經歷幼貓、成貓和老貓的三個重要階段。幼貓時，我們應提供溫暖的環境和高品質的幼貓糧，建立深厚的情感連結。透過遊戲和互動，培養牠們好奇心，為未來奠定穩固基礎。
<br><br>
            成貓時，我們要更全面地照顧貓咪。均衡營養的飲食、豐富的運動和心理刺激，是確保貓咪維持活力和健康的關鍵。成貓期是牠們展現獨立性和品格的時期，透過主動的參與，共同度過充實而愉快的時光。
            <br><br>
            老貓的階段需要更多的柔情和細心照顧。選擇適合老貓的食物，提供安逸的環境，並給予額外的情感陪伴。老貓期是懷舊和安詳的階段，透過維護健康、提供愛心，讓牠們安心地度過晚年。
            <br><br>
            這個全方位照護指南旨在引導主人深入了解每個階段的貓咪需求，提供最貼心的照顧。透過時光隧道的探索，我們共同見證貓咪在不同階段展現的美好，為牠們的生命時光留下溫馨和珍貴的回憶。 </p>
        </div>


        <div class="col-1"></div>
      </div>
    </div>
  </div>
  <?php
include "../inc/login_article.php"
?>

  <?php
include "../inc/footer_article.php"
  ?>
</body>

</html>