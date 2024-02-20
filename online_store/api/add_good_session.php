<?php

include_once "db.php";
$id=$_GET['id'];
$_SESSION['good'][$id]=+1;

$good = $Good->find($id);
$good['remain'] = $good['remain'] - 1;
$Good->save($good);

header("location:../index.php#store");