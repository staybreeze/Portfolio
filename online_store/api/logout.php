<?php
include_once "../api/db.php";
unset($_SESSION['user']);
unset($_SESSION['admin']);
unset($_SESSION['good']);
header("location:../index.php");