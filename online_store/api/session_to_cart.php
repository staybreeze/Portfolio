<?php
include_once "./db.php";

if (isset($_SESSION['good'])) {
    foreach($_SESSION['good'] as $goodId=>$good){

    $existingCartItem = $Customer->find(['customer_acc' => $_SESSION['user'], 'product_id' => $goodId]);

    if (!$existingCartItem) {
        $customerResult = $Customer->save([
            'customer_acc' => $_SESSION['user'],
            'product_id' => $goodId,
            'quantity' => 1,
        ]);
    } elseif (isset($existingCartItem)) {
        $newQuantity = $existingCartItem['quantity'] + 1;
        $customerResult = $Customer->update(

            $existingCartItem['id'],
            ['quantity' => $newQuantity]
        );
    }


    }}

    $goods = $Customer->all(['customer_acc' => $_SESSION['user']]);
    foreach ($goods as $good) {
        $_SESSION['good'][$good['product_id']] = 1;
    }
    
    echo "<pre>";
    print_r($customerResult);
    echo "</pre>";
    // unset($_SESSION['good']);
    header("location:../cart.php");
//     if (isset($_GET['cart'])) {
//         header("location:../cart.php");
//     } elseif (isset($_GET['mobile'])) {
//         header("location:../index.php#onlineStore");
//     } elseif (isset($_GET['query'])) {
//         header("location:../search.php?query={$_GET['query']}");
//     } else {
//         header("location:../index.php#store");
//     }
// } else {
//     header("location:../login.php?error=請先登入會員");
// }
