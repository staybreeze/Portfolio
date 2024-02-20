<?php
include_once "./db.php";
$id=$_GET['id'];
$_SESSION['good'][$id]=+1;
if (isset($_SESSION['user'])) {
    $goodId = $_GET['id'];

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


    $good = $Good->find($goodId);
    $good['remain'] = $good['remain'] - 1;
    $Good->save($good);


    echo "<pre>";
    print_r($customerResult);
    echo "</pre>";
    if (isset($_GET['cart'])) {
        header("location:../cart.php");
    } elseif (isset($_GET['mobile'])) {
        header("location:../index.php#onlineStore");
    } elseif (isset($_GET['query'])) {
        header("location:../search.php?query={$_GET['query']}");
    } else {
        header("location:../index.php#store");
    }
} else {
    header("location:../login.php?error=請先登入會員");
}
