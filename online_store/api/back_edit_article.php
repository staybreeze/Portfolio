<?php

include_once "db.php";
print_r($_POST);
$time=$_POST['time'];

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

echo "<br>";
echo $_POST['originImg'];
echo "<br>";


if (isset($_FILES['img']['tmp_name'])&&(!empty($_FILES['img']['tmp_name']))) {
    $imgFilename = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $imgFilename);
    $Article->save([
        'id'=>$_POST['id'],
        'title' => $_POST['title'],
        'content' =>$_POST['content'],
        'img' =>$imgFilename,
        'time'=> $time
      ]);

}else{


$Article->save([
    'id'=>$_POST['id'],
    'title' => $_POST['title'],
    'content' =>$_POST['content'],
    'img' =>$_POST['originImg'],
    'time'=> $time
  ]);}

  header("location:back_process_article.php?name={$_POST['title']}&p={$_POST['p']}")
?>
