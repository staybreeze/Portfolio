<?php
include_once "db.php";


// $table=$_POST['table']; 　＋　$DB=${ucfirst($table)};

$user=$_POST['user'];


unset($_POST['user']);
$User->save($_POST);

// header("location:../back/users.php?do=users");


?>