<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">會員登入</h4>
        <img src="../img/logo1.png" alt="" width="60px">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <!-- 插入程式碼要有頭跟END，方便日後維護及辨識 -->
        <!-- Modal body container.. -->
        <div class="container mt-3">


        <form action="../api/login.php" method="post">
            <?php
            if (isset($_GET['error'])) {
              echo "<span style='color:red'>";
              echo $_GET['error'];
              echo "</span>";
            }

            ?>
            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="price">帳號:</label>
                  <input type="text" class="form-control" id="acc" placeholder="Enter acc" name="acc">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="unit">密碼:</label>
                  <input type="password" class="form-control" id="pw" placeholder="Enter password" name="pw">
                </div>
              </div>
                          <a href="../add.php" style="padding-left:0px;text-decoration:underline;color:cadetblue" class="ms-4">加入會員</a>
                </div>
            </div>

            <div class="row mt-5">
              <div class="col-12">
                <div class="mb-3">
                  <div class="d-flex gap-2">
                    <button type="reset" class="btn btn-primary btn-secondary col-6">重置</button>
                    <button type="submit" class="btn btn-primary btn-warning  col-6">送出</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- Modal body container end -->


      <!-- Modal footer -->
      <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div> -->

    </div>
  </div>
</div>
<div class="modal" id="myModal-2">
  <div class="modal-dialog">

    <!-- <img src="./img/logo1.png" alt="" width="120%"> -->
    <img src="../img/logo1.png" alt="" width="120%">

    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

  </div>
</div>