<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-5">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="
              
              <?php
              if ($_GET['do'] == 'aboutUs') {
                echo "nav-link active";
              } else {
                echo "nav-link";
              }
              ?>" href="aboutUs.php?do=aboutUs">
          <div class="nav-border"><i class="fa-solid fa-cat"></i>
            &nbsp;關於我們
          </div>
        </a>
      </li>
      <li class="nav-item">
                <a class="

              <?php
                if ($_GET['do'] == 'articles') {
                    echo "nav-link active";
                } else {
                    echo "nav-link";
                }
                ?>"
                href="articles.php?do=articles&&add">
                <div class="nav-border"><i class="fa-solid fa-book-open"></i>
                &nbsp;文章管理
               </div> </a>
            </li>
      <li class="nav-item">
        <a class="
              
              <?php
              if ($_GET['do'] == 'goods') {
                echo "nav-link active";
              } else {
                echo "nav-link";
              }
              ?>" href="goods.php?do=goods">
          <!-- <span data-feather="shopping-cart"></span> -->
          <div class="nav-border"><i class="fa-solid fa-cart-shopping"></i>
            &nbsp;商品管理
          </div>
        </a>
      </li>

      <li class="nav-item">
        <a class="
                <?php
                if ($_GET['do'] == 'orders') {
                  echo "nav-link active";
                } else {
                  echo "nav-link";
                }
                ?>" href="orders.php?do=orders">
          <div class="nav-border"><i class="fa-solid fa-comments-dollar"></i>
            &nbsp;訂單管理
          </div>
        </a>
      </li>

      <li class="nav-item">
        <a class="
                <?php
                if ($_GET['do'] == 'messages') {
                  echo "nav-link active";
                } else {
                  echo "nav-link";
                }
                ?>" href="messages.php?do=messages">
          <div class="nav-border"><i class="fa-regular fa-envelope"></i>
            &nbsp;留言管理
          </div>
        </a>
      </li>
      </li>


      <li class="nav-item">
        <a class="
              
              <?php
              if ($_GET['do'] == 'users') {
                echo "nav-link active";
              } else {
                echo "nav-link";
              }
              ?>" href="users.php?do=users">
          <div class="nav-border"><i class="fa-solid fa-people-group"></i>
            &nbsp;會員管理
          </div>
        </a>
      </li>

      <li class="nav-item">
        <a class="
                <?php
                if ($_GET['do'] == 'admins') {
                  echo "nav-link active";
                } else {
                  echo "nav-link";
                }
                ?>" href="admins.php?do=admins">
          <div class="nav-border"><i class="fa-solid fa-user-tie"></i>
            &nbsp;管理員們
          </div>
        </a>
      </li>

      <li class="nav-item mt-5">
        <a class="nav-link fs-5 mx-auto" href="../index.php">

          <div style="width:200px;height:50px;padding-top:8px;  border:3px dotted#ffb71b;margin:auto"><i class="fa-solid fa-paw"></i>&nbsp;回首頁</div>
        </a>
      </li>
    </ul>

    <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li>
          </ul> -->
  </div>

</nav>