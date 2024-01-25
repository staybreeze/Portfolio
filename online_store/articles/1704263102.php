<?php
include_once "../inc/mouse_squares.php";
include_once "../api/db.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <title>成貓照護指南：健康與活力的秘訣</title>
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
    @media screen and (max-width: 410px) {


.aside img{
  padding-right:30px
 }

 h3 {
   font-size: 18px !important;
 }

 input[type='submit'] {
   width: 75px;
   font-size: 13px
 }

 p{
   font-size: 15px !important;
 }

 .footer{
   /* height: 96vh !important; */
 }
 .box {
   width: 300px;
 }
 .modal input[type='submit'] {
margin-left: 227px !important;
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
      <img src="../img/adult.jpg" width="100%" style="padding-top:70px ;">
    </div>

    <div class="col-6 section ms-5 ps-5">
      <br>
      <div class="box mt-5">
        <h3 class="h3">&nbsp; 成貓照護指南：健康與活力的秘訣</h3>
        <p class="mt-5" id="origin">

        
                當貓咪邁入成貓階段，我們需要更為全面的照顧來確保牠們的健康和活力。首先，提供均衡營養的飲食，應滿足成貓的特定營養需求。了解貓咪的飲食喜好，可能需要調整飲食方案，以確保其營養攝取的平衡。<br />
<br />
定期的運動對於成貓的體重管理和心理健康至關重要。給予足夠的運動空間和各類玩具，鼓勵牠們進行鍛煉和發揮天性。除此之外，每日互動時間也是維護心理健康的必要元素，可以透過與主人的遊戲和陪伴達到。<br />
<br />
口腔衛生是成貓健康的一環，應定期檢查口腔並提供適當的牙科照護。進行毛髮的定期梳理，有助於防止毛球的形成，同時維持外觀整潔。建立固定的醫療計劃，包括疫苗接種和定期的健康檢查，以確保及早發現和處理潛在的健康問題。<br />
<br />
最後，給予豐富的心理刺激，如提供新玩具或安排新活動，有助於保持貓咪的活潑好奇心。成貓階段的照護是一項綜合性的工作，透過這些建議，我們能夠確保貓咪在成長過程中維持最佳的健康狀態和生活品質。            
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