<?php

include_once "./db.php";

// $sql="delete from `users` where `id`='{$_GET['id']}'";


// $pdo->exec($sql);

// 錯誤的
// $Customer->del(['product_id' => $_GET['id'], 'customer_id' => $_SESSION['user']]);



if(isset($_GET['user'])){
    $Customer->del(['product_id' => $_GET['id'], 'customer_acc' => $_GET['user']]);
    // header("location:../back/orders.php?do=orders");
}else{
    $Customer->del(['product_id' => $_GET['id'], 'customer_acc' => $_SESSION['user']]);
header("location:../cart.php");}