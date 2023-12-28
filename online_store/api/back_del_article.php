<?php

include_once "db.php";


$Article->del($_GET['id']);


  header("location:../back/articles_edit.php?do=articles&&edit")
?>
