<?php
// include_once "../inc/connect.php";
include_once "./db.php";


$acc = $_POST['acc'];
$pw = $_POST['pw'];

print_r($_POST);
// 一般作法
// $sql="select * from users where `acc`='$acc' && `pw`='$pw'";
// $user=$pdo->query($sql)->fetch();

// if($user['acc']==$acc && $user['pw']==$pw){
//     // 讓SESSION記住
//     $_SESSION['user']=$acc;
//     header("location:index.php");
// }else{
//     header('location:login_form.php?error=帳號密碼錯誤');
// }

// ------
// 進階作法
// 由於query找資料時已經比對過資料，因此我們可以透過query比對來產出1/0值
// 傳輸1/0比傳輸帳密來得有效率
// $sql = "select count(*) from users where `acc`='$acc' && `pw`='$pw'";

// 執行sql語句，並返回該筆資料中指定欄位的資料，$n為欄位的索引值(0,1,2…)
// $user = $pdo->query($sql)->fetchColumn();
// if($user)的條件式等同$user==1

$admin = $Admin->count(['acc' => $acc, 'pw' => $pw]);


$windowWidth = $_POST['windowWidth'];

if ($windowWidth > 1200) {

    if (empty($_POST['acc']) || empty($_POST['pw'])) {
        header('location:../back_login.php?error=請輸入帳號和密碼');
        exit();
    } elseif ($admin) {
        $_SESSION['user_role'] = 'admin';
        $_SESSION['admin'] = $acc;
        header("location:../back.php");
        exit();
    } else {
        header('location:../back_login.php?error=帳號密碼錯誤');
        exit();
    }
} else {
    header('location:../back_login.php');
}
// if ($user) {
//     $_SESSION['user'] = $acc;
//     header("location:../index.php");
// } else {
//     header('location:../login_form.php?error=帳號密碼錯誤');
// }
// echo $res;