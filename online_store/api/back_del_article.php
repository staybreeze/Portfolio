<?php

include_once "db.php";


$time=$_GET['time'];

$fileToDelete = "../articles/{$time}.php";



if (file_exists($fileToDelete)) {

    if (unlink($fileToDelete)) {
        echo "檔案刪除成功！";
    } else {
        echo "檔案刪除失敗！";
    }
} else {
    echo "檔案不存在！";
}

$Article->del($_GET['id']);

  header("location:../back/articles_edit.php?do=articles&&edit")
?>
