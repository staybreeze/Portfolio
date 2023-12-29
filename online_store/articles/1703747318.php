<?php
include_once "../api/db.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <title>貓咪的皮膚護理學問</title>
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
        width: 250px;
      }
      .box{
        width: 300px;
      }
    }
    @media screen and (max-width: 450px) {

      .aside>img, .box{
        margin-left: -30px;
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
      <img src="../img/cat3.webp" alt="" width="100%" style="padding-top:70px ;">
    </div>

    <div class="col-6 section ms-5 ps-5">
      <br>
      <div class="box mt-5">
        <h3 class="h3">&nbsp; 貓咪的皮膚護理學問</h3>
        <p class="mt-5" id="origin">

        
                
                
                
                
                
                
                貓咪的皮膚健康對其整體幸福感至關重要，因此皮膚護理成為貓奴不可忽視的學問。首先，定期檢查貓咪的皮膚，留意是否有異常的紅腫、搔癢或脫毛現象。這有助於早期發現可能的皮膚問題，如皮膚炎、蟲害等。<br />
<br />
保持貓咪的毛髮清潔也是皮膚健康的重要步驟。定期給予貓咪梳理，不僅有助於除去脫落的毛髮，還可以促進血液循環，提升皮膚的新陳代謝。此外，選擇適合貓咪皮膚類型的洗毛精品，進行溫和的洗澡，有助於去除灰塵和過多的皮脂。<br />
<br />
適當的飲食也是皮膚護理的一部分。確保貓咪攝取足夠的水分，有助於保濕皮膚，減少乾燥和脫水引起的皮膚問題。同時，選用高品質的貓糧，確保營養均衡，有助於維持健康的皮膚狀態。<br />
<br />
若發現貓咪有皮膚問題，應及時諮詢獸醫的建議，並依醫囑進行治療。總的來說，透過定期檢查、適當的梳理、清潔和均衡的飲食，貓咪的皮膚將能保持良好狀態，使牠們在每個時刻都能展現出健康和自信。                                                                                    
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