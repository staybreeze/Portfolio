<?php
include_once "db.php";


$productID = $_POST['id'];

echo $productID;


$good = $Good->find(['id' => $productID]);
print_r($good);

$good['like_item'] += 1;



$Good->save($good);
?>
