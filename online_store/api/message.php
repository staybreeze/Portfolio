<?php
include_once "db.php";

if (isset($_GET['id'])) {
    $Message->del($_GET['id']);
    header("location: ../back/messages.php?do=messages");
    exit;
}


$message = [
    'sender' => $_POST['sender'],
    'subject'=> $_POST['subject'],
    'text' => $_POST['text']
];

$Message->save($message);

header("location:../index.php")

?>
