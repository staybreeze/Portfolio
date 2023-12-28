<?php

include_once "db.php";

$name = isset($_POST["title"]) ? $_POST["title"] : '';
$content = isset($_POST["content"]) ? nl2br(trim($_POST["content"])) : '';
$imgFilename = $_POST['img'];



if (isset($_FILES['img']['tmp_name'])) {
    $imgFilename = $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $imgFilename);
}

$Article->save([
    'title' => $name,
    'content' => $content,
    'img' => $imgFilename,
    'time'=> time()
  ]);

  header("location:back_process_article.php?name={$name}");

  