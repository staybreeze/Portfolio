<?php
include_once "db.php";


$about=$About->find(1);

$about['origin']=$_POST['origin'];
$about['goal']=$_POST['goal'];
$about['cheetos']=$_POST['cheetos'];

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    
    $_POST['img']=$_FILES['img']['name'];

}

if(!empty($_POST['img'])){
    $about['img']=$_POST['img'];
}else{
        $about['img'];
    }


$About->save($about);

header("location:../back/aboutUs.php?do=aboutUs")
?>