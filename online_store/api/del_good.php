<?php

include_once "./db.php";

// $sql="delete from `users` where `id`='{$_GET['id']}'";


// $pdo->exec($sql);

// 錯誤的
// $Customer->del(['product_id' => $_GET['id'], 'customer_id' => $_SESSION['user']]);



if(isset($_SESSION['user'])){
    $Customer->del(['product_id' => $_GET['id'], 'customer_acc' => $SESSION['user']]);
    $good = $Good->find($_GET['id']);
    print_r($good);
    $good['remain'] = $good['remain']+$_GET['quantity'];
    $Good->save($good);

 header("location:../cart.php");
}elseif(isset($_GET['user'])){
    $Customer->del(['product_id' => $_GET['id'], 'customer_acc' => $_GET['user']]);
    $good = $Good->find($_GET['id']);
    print_r($good);
    $good['remain'] = $good['remain']+$_GET['quantity'];
    $Good->save($good);
    header("location:../back/orders.php?do=orders");
}