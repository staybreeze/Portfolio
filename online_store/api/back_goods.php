<?php
include_once "db.php";

if(isset($_GET['del'])){
    $Good->del($_GET['del']);
}else{

$id=intval($_POST['id']);
$good=$Good->find($id);

$name = isset($_POST['name']) ? $_POST['name'] : '';
$quatity = isset($_POST['quatity']) ? $_POST['quatity'] : '';
$old_price = isset($_POST['old_price']) ? $_POST['old_price'] : '';
$discount = isset($_POST['discount']) ? $_POST['discount'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';

$good['name'] = is_array($name) ? implode(', ', $name) : $name;
$good['quatity'] = is_array($quatity) ? implode(', ', $quatity) : $quatity;
$good['old_price'] = is_array($old_price) ? implode(', ', $old_price) : $old_price;
$good['discount'] = is_array($discount) ? implode(', ', $discount) : $discount;
$good['price'] = is_array($price) ? implode(', ', $price) : $price;




if (isset($_POST['new'])) {
  
    $good['new'] = 1;
} else {
  
    $good['new'] = 0;
}

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    
    $_POST['img']=$_FILES['img']['name'];

}

if(!empty($_POST['img'])){
    $good['img']=$_POST['img'];
}else{
        $good['img'];
    }


$Good->save($good);
}
header("location:../back/goods.php?do=goods")
?>