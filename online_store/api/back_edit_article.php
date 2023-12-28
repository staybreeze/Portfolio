<?php

include_once "db.php";

$time=$_POST['time'];

$fileToDelete = "../articles/{$time}.php";

$Article->del($_POST['id']);

if (file_exists($fileToDelete)) {

    if (unlink($fileToDelete)) {
        echo "檔案刪除成功！";
    } else {
        echo "檔案刪除失敗！";
    }
} else {
    echo "檔案不存在！";
}

$Article->save([
    'title' => $_POST['title'],
    'content' =>$_POST['content'],
    'img' =>$_POST['img'],
    'time'=> time()
  ]);

  header("location:back_process_article.php?name={$_POST['title']}")
?>
