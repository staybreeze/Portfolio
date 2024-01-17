<?php
include_once "db.php";

if(isset($_GET['del'])){
    $Good->del($_GET['del']);
}else{

$id=intval($_POST['id']);
$good=$Good->find($id);

$name = isset($_POST['name']) ? $_POST['name'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$old_price = isset($_POST['old_price']) ? $_POST['old_price'] : '';
$discount = isset($_POST['discount']) ? $_POST['discount'] : '';
$remain = isset($_POST['remain']) ? $_POST['remain'] : '';


$good['name'] = is_array($name) ? implode(', ', $name) : $name;
$good['quantity'] = is_array($quantity) ? implode(', ', $quantity) : $quantity;
$good['old_price'] = is_array($old_price) ? implode(', ', $old_price) : $old_price;
$good['discount'] = is_array($discount) ? implode(', ', $discount) : $discount;
$good['price'] = round($good['old_price']*(1 - $good['discount'] / 100));
$good['remain'] = is_array($remain) ? implode(', ', $remain) : $remain;


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
header("location:../back/goods.php?do=goods#edit")
?>