<?php
include_once "../api/db.php";
unset($_SESSION['user']);
unset($_SESSION['admin']);

header("location:../index.php");