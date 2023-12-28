<?php
include_once "db.php";
function generateHTML($title, $content, $imgFilename)
{
  // 生成文章的網頁內容
  $articleContent = <<<HTML
<?php
include_once "../api/db.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <title>{$title}</title>
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
      <img src="../img/{$imgFilename}" alt="" width="100%" style="padding-top:70px ;">
    </div>

    <div class="col-6 section ms-5 ps-5">
      <br>
      <div class="box mt-5">
        <h3 class="h3">&nbsp; {$title}</h3>
        <p class="mt-5" id="origin">

        {$content}
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
HTML;

  return $articleContent;
}

if (isset($_GET['name'])) {
  $article = $Article->find(['title' => $_GET['name']]);

$title=$article['title'];
  $content = $article['content'];
  $imgFilename = $article['img'];



  // if (!empty($title) && !empty($content)) {
  $filename = "../articles/" . time() . ".php";
  $articleContent = generateHTML($title, $content, $imgFilename);


  if (file_put_contents($filename, $articleContent)) {
    echo "文章新增成功！ <a href='{$filename}'>檢視文章</a>";
    header("Location: ../back/articles_edit.php?do=articles&&edit");
  } else {
    echo "文章新增失敗！";
    header("Location:../back/articles_edit.php?do=articles&&edit");
  }
} else {
  header("Location: add_article_form.php");
  exit();
}


// }
