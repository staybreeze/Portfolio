<?php
include_once "db.php";


// $table=$_POST['table']; 　＋　$DB=${ucfirst($table)};

if(isset($_POST['user'])){
$user=$_POST['user'];


unset($_POST['user']);
$User->save($_POST);}
else{

    $admin=$_POST['admin'];


unset($_POST['admin']);
$Admin->save($_POST);
}

if (isset($admin)) {
    header("location:../back/admins.php?do=admins");
    exit;
} else {
    header("location:../back/users.php?do=users");
    exit;
}
?>