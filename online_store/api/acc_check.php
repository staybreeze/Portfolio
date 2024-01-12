<?php

include_once "db.php";




$acc = htmlspecialchars(trim($_POST['acc']));
$pattern = '/^[a-zA-Z0-9]+$/';


if (!preg_match($pattern, $acc)) {
$res='wrongAcc';
    echo $res;
    exit();
} 

$res=$User->count(['acc'=>$_POST['acc']]);
if($res>0){
    echo 1;
}else{
    echo 0;
}

