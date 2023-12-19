<?php 
include_once "../api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>奇多喵合作社>文章>幼貓照護指南：啟蒙與關愛的開始</title>
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
<img src="../img/kitten.jpg" alt="" width="100%" style="padding-top:70px ;">
      </div>

      <div class="col-6 section ms-5 ps-5">
        <br>
        <div class="box mt-5">
          <h3 class="h3">&nbsp;幼貓照護指南：啟蒙與關愛的開始</h3>
          <p class="mt-5" id="origin">

            幼貓是生命的初階，需要特別的照顧與愛護。首先，確保提供優質的幼貓糧，滿足牠們快速發展的需求。維持適宜的環境溫度，不僅可以促進食慾，還能避免感冒等健康問題。
<br><br>
建立與幼貓的深厚關係至關重要。透過溫柔的撫摸、遊戲和語言互動，培養出親密無間的連結，有助於幼貓的社交發展和信任建立。提供豐富且安全的玩具，激發牠們的好奇心，促進身心發展。
<br><br>
及早培養健康的飲食習慣，定期檢查口腔和牙齒，確保口腔健康。養成適時醫療檢查的習慣，以便發現潛在問題並及時處理。給予幼貓良好的衛生習慣，定期梳理毛髮，注意除蚤和驅蟲。
<br><br>
最後，給予足夠的關愛和時間，讓牠們在愉快的環境中茁壯成長。這段幼貓時期不僅是生理發展的關鍵時期，更是建立牠們與人類之間深厚情感連結的寶貴時光。透過這份愛與關懷，創造出一個快樂、健康的幼貓成長環境。
          </p>
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