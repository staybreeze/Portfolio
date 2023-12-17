<?php
if (isset($_GET['year']) && isset($_GET['month']) && !empty($_GET['year']) && !empty($_GET['month']) && $_GET['month'] < 13 && $_GET['year'] <= 9999999999) {
    $year = $_GET['year'];
    $month = $_GET['month'];
    header("location:calendar.php?year=$year&month=$month");
}else{
    header("location:calendar.php");
}
?>


