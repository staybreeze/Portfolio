<?php
include_once "db.php";



    $id=$_GET['goodId'];
    
    $good=$Good->find($id);

    echo  $good['remain'];

?>