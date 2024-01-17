<?php
include_once "./db.php";

if (isset($_SESSION['user'])) {
    $goodId = $_GET['id'];

    $existingCartItem = $Customer->find(['customer_acc' => $_SESSION['user'], 'product_id' => $goodId]);

    if (!$existingCartItem) {
        $customerResult = $Customer->save([
            'customer_acc' => $_SESSION['user'],
            'product_id' => $goodId,
            'quantity' => 1,
        ]);
    } elseif(isset($existingCartItem)) {
        $newQuantity = $existingCartItem['quantity'] + 1;
        $customerResult = $Customer->update(
            
            $existingCartItem['id'],
            ['quantity' => $newQuantity]
        );
    }
    echo "<pre>";
    print_r($customerResult);
    echo "</pre>";
if(isset($_GET['cart'])){
    header("location:../cart.php");
}else{
    header("location:../index.php#store");}
} else {
    header("location:../login.php?error=請先登入會員");
}
?>
