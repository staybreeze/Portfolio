<?php
include_once "../api/db.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <title>從幼到老：貓咪生命的三個重要階段</title>
      <link rel="icon" href="../img/logo3.jpg" type="image/x-icon">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    .footer {
      margin-top: 0px;
    }

    @media screen and (max-width: 550px) {
      .aside {
        margin-left: 110px;
      }
    }

    @media screen and (max-width: 550px) {
      .aside>img {
        width: 300px;
      }
      .box{
        width: 350px;
      }
    }
    @media screen and (max-width: 450px) {

   .box{
        margin-left: -50px;
      }
      .aside>img{
        margin-left: -60px;
      }
      .modal input[type='submit'] {
margin-left: 283px !important;
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
      <img src="../img/cat11.webp" alt="" width="100%" style="padding-top:70px ;">
    </div>

    <div class="col-6 section ms-5 ps-5">
      <br>
      <div class="box mt-5">
        <h3 class="h3">&nbsp; 從幼到老：貓咪生命的三個重要階段</h3>
        <p class="mt-5" id="origin">

        
                貓咪的生命旅程有如一幅美麗的畫卷，分為幼貓、成貓和老貓三個重要階段。在幼貓時期，我們需要提供充足的愛與關懷，確保牠們在成長過程中得到良好的照顧。選擇高品質的幼貓糧，滿足牠們的營養需求，並建立深厚的人貓關係，透過遊戲和互動培養出活潑好奇的性格。<br />
<br />
當貓咪邁入成貓階段，我們需要更全面的照顧。提供均衡營養的飲食，鼓勵規律運動，同時關注心理健康。成貓時期是貓咪最為活潑和好奇的階段，透過提供豐富的遊戲和挑戰，可以保持其身心的活力。<br />
<br />
老貓階段需要更多的柔情和細心。選擇適合老貓的食物，補充關節保健成分，提供舒適的環境，以減輕老貓可能面臨的生理壓力。給予更多的陪伴和愛，定期醫療檢查，以確保老貓的健康和舒適。<br />
<br />
從幼到老，每個階段都有其獨特的需求和美好。透過主人的細心照顧，貓咪可以在每個階段都綻放出最美好的生命光華。成就一個幸福、健康的貓咪生命旅程，是主人最大的心願。            
         </p> <br>
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