<?php
include_once "../api/db.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <title>老貓照護指南：柔情伴隨，溫馨陪伴</title>
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
      <img src="../img/cat4.jpg" width="100%" style="padding-top:70px ;">
    </div>

    <div class="col-6 section ms-5 ps-5">
      <br>
      <div class="box mt-5">
        <h3 class="h3">&nbsp; 老貓照護指南：柔情伴隨，溫馨陪伴</h3>
        <p class="mt-5" id="origin">

        
                老貓照護需要更為細心和關愛，這個階段是貓咪生命中特別寶貴的時光。首先，我們應選擇適合老貓的易咀嚼食物，同時加入關節保健成分，以應對可能出現的關節問題，確保老貓的身體機能維持在最佳狀態。<br />
<br />
在創造舒適的居住環境方面，我們應提供柔軟的床舖和避免讓老貓長時間處於濕冷的地方。定期醫療檢查是老貓照護的重要一環，透過檢查及時發現並處理潛在的健康問題。尤其需要注意牙齒和口腔的清潔，以預防牙齒問題和口腔疾病。<br />
<br />
提供豐富的情感陪伴是老貓照護的重中之重。老貓可能會變得更加依賴主人，給予額外的關愛和陪伴，可以緩解老貓可能感受到的孤獨感。與老貓進行溫柔的互動，定期為牠們進行毛髮梳理，有助於保持外觀整潔，同時促進老貓的血液循環。<br />
<br />
總的來說，老貓照護需要綜合考慮牠們的生理和心理需求。這段時光不僅是老貓的晚年，更是主人與貓咪深厚情感連結的時光。透過柔情的陪伴和細心的照顧，我們可以確保老貓在晚年享受到滿滿的溫馨和關懷。            
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