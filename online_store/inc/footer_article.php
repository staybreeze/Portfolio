<footer class="footer " id="footer">
  <div class="container-fluid">
    <div class="row d-flex" style="padding-top:35px">

      <div class="col-md-3 contact col" style="margin-top: 30px;margin-left:100px;">
        <img src="../img/logo1.png" alt="" width="130px">


        <p style="font-size:15px">243 新北市泰山區貴子里致遠新村55之1號</p>
        <a style="font-size:15px" href="mailto: wunshengliao@gmail.com">EMAIL: wunshengliao@gmail.com</a>
        <a style="font-size:15px" href="tel:+886123456789">TEL: +886-1-2345-6789</a>


      </div>
      <div class="font-awesome mt-5 col-md-1 col ps-4">
        <a aria-label="instagram" target="_blank" href="">
          <i class="fa-brands fa-instagram  fa-2xl  mt-3 " style="padding-left:25px;font-size: 40px;padding-top:3px"></i>
        </a>
        <br>
        <br>
        <a aria-label="facebook" target="_blank" href="">
          <i class="fa-brands fa-facebook  fa-2xl pt-4 " style="padding-left:25px;"></i>
        </a>
        <br>
        <br>
        <a aria-label="line" target="_blank" href="https://www.instagram.com/kingone_design">
          <i class="fa-brands fa-line fa-2xl pt-4 " style="padding-left:25px"></i>
        </a>
        <br>
        <br>
        <a aria-label="Youtube" target="_blank" href="">
          <i class="fa-brands fa-youtube  fa-2xl pt-4 " style="padding-left:23px"></i>
        </a>

      </div>


      <div class=" mt-5 col-md-5 col footer-pages" style="border-left:5px solid white">
          <ul class="pages">
            <li>
              <a class="footer-header" href="#">關於我們</a>
            </li>
            <li>
              <a href="#">起源</a>
            </li>
            <li>
              <a href="#origin">目標</a>
            </li>
            <li>
              <a href="#cheetos">店貓－奇多（Cheetos）</a>
            </li>

          </ul>

          <ul class="pages">
            <li>
              <a class="footer-header" href="../articles.php#">貓咪文章</a>
            </li>
            <li>
              <a class="" href="../articles.php#">幼貓</a>
            </li>
            <li>
              <a class="" href="../articles.php#">成貓</a>
            </li>
            <li>
              <a class="" href="../articles.php#">老貓</a>
            </li>
          </ul>
          <ul class="pages">
            <li>
              <a class="footer-header" href="../index.php#store">購物商城</a>
            </li>
            <li>
              <a class="" href="../index.php#store">食物</a>
            </li>
            <li>
              <a class="" href="../index.php#store">玩具</a>
            </li>
            <li>
              <a class="" href="../index.php#store">生活用品</a>
            </li>
          </ul>
          <ul class="pages">
            <li>
              <a class="footer-header" href="" data-bs-toggle="modal" data-bs-target="#myModal">會員專區</a>
            </li>
            <?php
            if(isset($_SESSION['user'])){
              echo            '<li>';
             echo  '<a href="../member.php">修改密碼</a>';
            echo '</li>';
            }else{
              echo            '<li>';
             echo  '<a href="../add.php">加入會員</a>';
            echo '</li>';
            }
            ?>
    
            <li>
              <a href="../cart.php">訂單查詢</a>
            </li>
            <li>
              <a href="../back_login.php">管理員登入</a>
            </li>

          </ul>



        </div>


        <<a class="footer-header pt-1 text-center join-us" 
       
       href=""data-bs-toggle="modal" data-bs-target="#contact">Join Us!</a>

     </div>
   
 </footer>
 <div class="copyright">
   <p>© WSL Web ALL Reserved.</p>
 </div>
 </div>

 <!-- contact Modal -->
<div class="modal" id="contact">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">歡迎留下消息～(*´∀`)~♥</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
      <form action="../api/message.php" method="post">
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <span class="input-group-text bold">寄信人</span>
                    <input type="text" class="form-control" placeholder="e-mail" name="sender">
                
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bold">收件人</span>
                    <input type="text" class="form-control" disabled placeholder="wunshengliao@gmail.com">
                
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text bold">主旨</span>
                    <input type="text" class="form-control" name="subject">
                
                </div>
                <div class="row">
                    <div class="col">
                        <p class="bold mt-3">信件內容</p>
                        <div class="form-floating">
                            <textarea class="form-control" id="comment" name="text"
                                placeholder="Comment goes here"></textarea>
                            <label for="comment"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input class="btn myBtn mt-3" style="margin-left:400px" type="submit" value="送出">
      </form>
        </div>
  

  
      </div>
    </div>
  </div>
  
  
