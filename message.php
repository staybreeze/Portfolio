<?php
include_once "db.php";



$message = [
    'sender' => $_POST['sender'],
    'subject'=> $_POST['subject'],
    'text' => $_POST['text']
];

$Message->save($message);

header("location:index.php")

?>
