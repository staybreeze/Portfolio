<?php
include_once "db.php";

if (!isset($_SESSION['liked_products'])) {
    $_SESSION['liked_products'] = [];
}
$productId = $_POST['id'];
$good = $Good->find(['id' => $productId]);
print_r($good);
echo $productId;

if (in_array($productId,$_SESSION['liked_products'])) {
  
    $index = array_search($productId, $_SESSION['liked_products']);
    unset($_SESSION['liked_products'][$index]);
    $good['like_item']--;
} else {
 
    $_SESSION['liked_products'][] = $productId;
    $good['like_item'] ++;
}

print_r($_SESSION);

$Good->save($good);
