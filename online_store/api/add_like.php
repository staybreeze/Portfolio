<?php
include_once "db.php";

if (!isset($_SESSION['liked_products'])) {
    $_SESSION['liked_products'] = [];
}
$productId = $_POST['id'];

echo $productId;

if (in_array($productId,$_SESSION['liked_products'])) {
  
    $index = array_search($productId, $_SESSION['liked_products']);
    unset($_SESSION['liked_products'][$index]);
} else {
 
    $_SESSION['liked_products'][] = $productId;
}


print_r($_SESSION);


$good = $Good->find(['id' => $productId]);
print_r($good);

$good['like_item'] += 1;



$Good->save($good);
