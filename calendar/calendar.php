<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <style>
        @import url('https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@100;600;800&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Limelight&family=Yusei+Magic&family=Zen+Maru+Gothic:wght@300;400;700;900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@900&family=Zen+Old+Mincho:wght@900&display=swap');


        * {
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        body {
            width: 1920px;
            height: 1080px;
            margin: auto;
            background-color: rgba(53, 78, 107);
        }

        .nav,
        .aside,
        .section1,
        .section2,
        .section3 {

            border: 10px solid rgba(125, 92, 223);
            border-style: double;

        }

        .section {
            display: flex;
            flex-wrap: wrap;
        }

        .nav {
            width: 100%;
            height: 13%;
            display: flex;
            border-left: none;
            border-top: none;
            padding-left: 5px;
            padding-top: 3px;
            border-bottom: none;
        }

        .nav-left,
        .nav-center-l,
        .nav-center-r,
        .nav-right {
            width: 100%;
            height: 100%;
            /* border: 5px solid rgba(125, 92, 223); */
        }

        /* .nav-right {
            font-family: 'Big Shoulders Inline Text', cursive;

            color: rgba(125, 92, 223);
            font-weight: bolder;

        } */


        /* .nav-right:hover {
            background-color: #ecd453;
            border-radius: 20px;


        } */

        .nav-center-r,
        .nav-center-l,
        .nav-right,
        .nav-left {
            border-bottom: none;
        }

        h3 {
            padding-top: 18px;
            padding-left: 7px;
            font-family: 'Big Shoulders Inline Text', cursive;
            font-size: 88px;
            color: gold;
            /* left:-30px; */
            /* background-color: rgba(125, 92, 223,0.5); */
            /* width: 469px;
height: 65px;
padding-top: 3px;
padding-left: 2px; */

        }

        .nav>div>div {
            display: flex;
            flex-wrap: wrap;

        }

        /* .nav>div>div {
            border: 3px solid black;
        } */

        .search {

            padding-left: 10px;
            font-family: 'Big Shoulders Inline Text', cursive;
            height: 12%;
            width: 35%;

            color: rgba(125, 92, 223);
            font-weight: bolder;
            font-size: 80px;
            height: 80%;

        }

        .back-now {

            font-family: 'Big Shoulders Inline Text', cursive;


            color: rgba(125, 92, 223);
            font-weight: bolder;
            font-size: 80px;
            height: 10.5%;
            width: 16.5%;

            padding-left: 3px;
        }

        .search:hover {
            /* background-color: #ecd453;
            border-radius: 20px; */
        }

        .back-now:hover {
            background-color: #ecd453;
            border-radius: 20px;

        }


        .nav>div>div>a {
            margin: right;
        }



        .nav>div>div>p {
            padding-top: 17px;
            padding-left: 20px;
            color: rgba(125, 92, 223);
            font-size: 60px;
        }





        .input-y {
            padding-left: 20px;
            padding-top: 35px;
            width: 5.2vw;
            height: 9.2592vh;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            font-weight: bolder;
        }

        .input-m {

            padding-left: 20px;
            padding-top: 35px;
            width: 5.2vw;
            height: 9.2592vh;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            font-weight: bolder;


        }

        .input-s {
            position: relative;
            /* padding-left: 40px;
            padding-top: 5px;
            width: 100%;
            height: 100%; */
            /* font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;
            font-weight: bolder;
            background-color: #ecd453; */
            /* padding-left: 220px;

            bottom: 820px; */

            padding-top: 53px;
            padding-left: 22px;
            /* background-color: #ecd453; */

        }

        .input-m>input,
        .input-y>input {
            background-color: rgba(240, 156, 90);


        }

        input[type="number"] {
            color: rgba(26, 106, 64);
            font-family: 'Zen Maru Gothic', serif;
            font-weight: bolder;
        }

        input[type="submit"] {
            color: rgba(26, 106, 64);
            font-family: 'Zen Maru Gothic', serif;
            font-weight: bolder;
            background-color: #ecd453;
            width: 80px;
            height: 27px;

        }

        .container {
            width: 100%;
            height: 87%;
            display: flex;
            flex-direction: row-reverse;
        }

        .aside {
            height: 100%;
            width: 50%;
            display: flex;
            border-right: none;
            border-left: none;
            border-bottom: none;


        }

        a>img:hover {
            border: 8px solid #ecd453;
            border-radius: 20px;
            border-style: double;
        }


        .box-title-bg {
            position: fixed;
            top: 250px;
            left: 653px;
            /* right: 40px; */
            background-color: rgba(125, 92, 223, 0.3);
            width: 110px;
            height: 500px;
            /* opacity: 0.8; */
            font-family: 'Zen Maru Gothic', serif;
            font-size: 35px;
            color: #ecd453;
            font-weight: bolder;
        }

        .box-title-w {
            position: fixed;
            top: 261px;
            left: 705px;

            width: 90px;
            height: 800px;

            font-family: 'Zen Maru Gothic', serif;
            font-size: 35px;
            color: #ecd453;
            font-weight: bolder;
            line-height: 53px;
        }





        .box-author-bg {
            position: fixed;
            bottom: 5px;
            left: 0px;
            /* right:300px; */
            background-color: rgba(164, 171, 214, 0.4);
            width: 688px;
            height: 70px;


        }

        .box-author-w {
            position: fixed;
            padding-top: 3px;
            bottom: 0px;
            left: 5px;
            width: 672px;
            height: 70px;

            font-family: 'Zen Maru Gothic', serif;

            font-size: 35px;
            color: rgba(255, 55, 0);
            font-weight: bolder;
            text-align: center;
        }

        .box-author-bg:hover {
            border: 8px solid rgba(240, 156, 90);
            ;
            border-radius: 20px;
            border-style: double;
            background-color: rgba(164, 171, 214, 0.15);

        }

        .box-author-bg-special {
            position: fixed;
            bottom: 0px;

            background-color: rgba(164, 171, 214, 0.4);
            width: 560px;
            height: 70px;

            font-family: 'Zen Maru Gothic', serif;



        }

        .box-author-bg-special:hover {
            border: 8px solid rgba(240, 156, 90);
            ;
            border-radius: 20px;
            border-style: double;
            background-color: rgba(164, 171, 214, 0.15);

        }


        .box-author-w-special {
            position: fixed;
            padding-top: 6px;
            bottom: 0px;
            left: 13px;
            width: 672px;
            height: 70px;

            font-family: 'Zen Maru Gothic', serif;

            font-size: 35px;
            color: rgba(248, 113, 58);
            font-weight: bolder;
            text-align: left;
        }



        .main {
            height: 100%;
            width: 57%;
            border: none;

        }

        .main-top {
            border: 10px solid rgba(125, 92, 223);
            border-style: double;
            display: flex;
        }

        .main-center-center {
            padding-top: 35px;
            text-align: center;
            background-color: rgba(164, 171, 214, 0.08);
        }

        .main-center-right {
            padding-top: 200px;
            padding-left: 31px;

            background-color: rgba(164, 171, 214, 0.08);

        }

        .main-center-left {
            padding-top: 200px;
            padding-left: 28px;

            background-color: rgba(164, 171, 214, 0.08);

        }

        .main-bottom {
            display: flex;
            color: gold;
            margin: auto;
            text-align: center;
            justify-content: center;

            align-items: center;
        }

        table {
            width: 100%;
            margin: auto;
        }


        .tr-4 {

            height: 88px;
            text-align: center;
        }

        .tr-5 {

            height: 70px;
            text-align: center;
        }

        .tr-6 {

            height: 58px;
            text-align: center;
        }

        .week {
            width: 95px;
            height: 50px;
            text-align: center;
            font-size: larger;
            font-weight: bolder;

            font-family: 'Big Shoulders Inline Text', cursive;
            color: rgba(53, 78, 107);
            background-color: #ecd453;
        }

        td {
            width: 14%;
            height: 100%;
            font-size: larger;
            text-align: center;
        }


        .td-weekend {
            font-family: 'Yusei Magic', sans-serif;
            background: rgba(125, 92, 223, 0.5);
            color: orange;
        }

        .td-date {
            font-family: 'Yusei Magic', sans-serif;

            color: gray;
            background: rgba(211, 204, 214);

        }

        .td-not-month-day {


            color: gray;
            background: rgba(211, 204, 214, 0.8);


        }

        .td-weekend:hover {
            background-color: #ecd453;
            /* font-size: larger; */
            border: 5px solid rgba(125, 92, 223);
            border-style: double;
            color: rgba(125, 92, 223);

        }

        .td-date:hover {
            background-color: #ecd453;
            /* font-size: larger; */
            border: 5px solid rgba(125, 92, 223);
            border-style: double;

        }

        td>.now {
            /* font-size: 18px; */
            color: crimson;

            margin-bottom: 0;
            margin: auto;
            font-family: 'Zen Maru Gothic', serif;
            font-weight: 800;
        }

        .birthday-weekend {
            font-size: 15px;
            color: rgba(211, 204, 214);


            margin-bottom: 0;
            margin: auto;
            font-family: 'Zen Maru Gothic', serif;
            font-weight: bold;
        }

        .birthday-weekend:hover {
            color: rgba(255, 55, 0);
        }

        .birthday-weekdays {
            font-size: 15px;
            color: rgba(125, 92, 223);

            margin-bottom: 0;
            margin: auto;
            font-family: 'Zen Maru Gothic', serif;
            font-weight: bold;
        }

        td>.festival-weekdays {
            font-size: 15px;
            color: rgba(125, 92, 223);

            margin-bottom: 0;
            margin: auto;
            font-family: 'Zen Maru Gothic', serif;
            font-weight: bold;
        }

        td>.festival-weekend {
            font-size: 15px;
            color: rgba(211, 204, 214);

            margin-bottom: 0;
            margin: auto;
            font-family: 'Zen Maru Gothic', serif;
            font-weight: bold;
        }

        td>.festival-weekend:hover {

            color: rgba(125, 92, 223);


        }

        .section1 {
            display: flex;
            border-top: none;
            background-color: rgba(125, 92, 223, 0.419);
            border: 10px solid rgba(125, 92, 223);
            border-style: double;
        }

        .section2 {
            display: flex;
            border-top: none;

        }

        .section3 {
            display: flex;
            border-top: none;
            border-bottom: none;
        }

        .year-month {
            width: 100%;
            height: 103%;
            border: none;
        }


        .right-number,
        .left-number {
            font-size: 60px;
            font-family: 'Big Shoulders Inline Text', cursive;
            color: gold;

            text-align: center;
            padding-top: 11px;
        }

        .left-year,
        .right-month {
            font-size: 70px;
            font-family: 'Big Shoulders Inline Text', cursive;
            font-weight: bolder;
            color: rgba(240, 156, 90);

            text-align: center;
            padding-bottom: 50px;
        }

        .slash {
            border: none;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: rgba(125, 92, 223);
            font-size: 50px;
            position: fixed;
            
        }

        .a_right {

            font-size: 80px;
        }



        .a_left {

            font-size: 80px;
        }

        .w-7 {
            width: 7%;
        }

        .w-10 {
            width: 10%;
        }

        .w-12 {
            width: 12%;
        }

        .w-13 {
            width: 13%;
        }

        .w-14 {
            width: 14%;
        }

        .w-15 {
            width: 15%;
        }

        .w-17 {
            width: 17%;
        }

        .w-18 {
            width: 18%;
        }

        .w-20 {
            width: 19.5%;
        }

        .w-22 {
            width: 22%;
        }

        .w-23 {
            width: 23%;
        }

        .w-25 {
            width: 25%;
        }

        .w-27 {
            width: 27%;
        }

        .w-28 {
            width: 28%;
        }

        .w-30 {
            width: 30%;
        }

        .w-35 {
            width: 35%;
        }

        .w-37 {
            width: 37.5%;
        }

        .w-38 {
            width: 38%;
        }

        .w-40 {
            width: 40%;
        }

        .w-42 {
            width: 42%;
        }

        .w-43 {
            width: 43%;
        }

        .w-45 {
            width: 45%;
        }

        .w-47 {
            width: 47%;
        }

        .w-48 {
            width: 48%;
        }

        .w-50 {
            width: 50%;
        }

        .w-55 {
            width: 55%;
        }

        .w-72 {
            width: 72%;
        }

        .w-73 {
            width: 73%;
        }

        .w-75 {
            width: 75%;
        }

        .w-77 {
            width: 77%;
        }

        .w-78 {
            width: 78%;
        }

        .w-80 {
            width: 80%;
        }


        .w-100 {
            width: 100%;
        }


        .h-5 {
            height: 5%;
        }

        .h-8 {
            height: 8%;
        }

        .h-10 {
            height: 10%;
        }

        .h-15 {
            height: 15%;
        }

        .h-20 {
            height: 20%;
        }

        .h-25 {
            height: 25%;
        }

        .h-30 {
            height: 30%;
        }

        .h-50 {
            height: 50%;
        }

        .h-54 {
            height: 54%;
        }

        .h-55 {
            height: 55%;
        }

        .h-56 {
            height: 56%;
        }

        .h-57 {
            height: 57%;
        }

        .h-58 {
            height: 58%;
        }

        .h-60 {
            height: 60%;
        }

        .h-65 {
            height: 65%;
        }

        .h-70 {
            height: 70%
        }


        .h-80 {
            height: 80%
        }

        .h-89 {
            height: 89%
        }

        .h-90 {
            height: 90%
        }

        .h-100 {
            height: 100%;
        }

        /* .nav>div>div,
        form>div {

            border: 1px solid black;
        } */

        /* .nav-center-l,
        .nav-center-r,
        .nav-left {

            border: 1px solid black;

        }  */
        .input-container {
            display: flex;

        }

        .input-m {
            /* flex: 1;
            margin-right: 10px; */
        }

        .input-s {
            /* flex-shrink: 0;/ */
        }

        /* .content {

            height: 100%;
            padding-bottom: 50px;
            width: 35.5%;
        } */

        .content {
				height: 100%;
                width:35%;
			}
			#rainBox {
				height: 100%;
			}

        .rain {
            position: absolute;
            width: 3px;
            height: 30px;
            background: linear-gradient(rgba(255, 255, 255, .3), rgba(255, 255, 255, .66));
        }
    </style>
</head>

<body>
    <div class="nav">


        <?php
        if (isset($_GET['month']) && $_GET['month'] == 1) {
            echo "<div class='nav-left h-100 w-38' style='background-color:rgba(244, 71, 24,0.55)'>
<h3 class='h3'>
C&nbsp;A&nbsp;L&nbsp;E&nbsp;N&nbsp;D&nbsp;A&nbsp;R&nbsp; _&nbsp;_
</h3></div>";
        } elseif (isset($_GET['month']) && $_GET['month'] > 1 && $_GET['month'] < 13) {

            echo "<div class='nav-left h-100 w-38' style='background:rgba(125, 92, 223, 0.5)'>
    <h3 id='h3'>
    C&nbsp;A&nbsp;L&nbsp;E&nbsp;N&nbsp;D&nbsp;A&nbsp;R&nbsp; _&nbsp;_
    </h3>
    </div>";
        } else {
            echo
            "<div class='nav-left h-100 w-38' style='background:rgba(125, 92, 223, 0.5)'>
                <h3 id='h3'>
                C&nbsp;A&nbsp;L&nbsp;E&nbsp;N&nbsp;D&nbsp;A&nbsp;R&nbsp; _&nbsp;_
                </h3>
                </div>";
        }
        ?>

        <div class="nav-center-l h-100 w-12 "></div>
        <div class="nav-center-r h-100 w-38">
            <div class="w-100 h-20"></div>
            <div class="w-100 h-90">

                <h4 class="search">Search</h4>
                <p>▸</p>

                <form action="check.php" method="get">
                    <div class="input-container">
                        <div class="input-y">
                            <label for="year">Year</label>
                            <input type="number" name="year">
                        </div>
                        <div class="input-m">
                            <label for="month">Month</label>
                            <input type="number" name="month">
                        </div>

                        <div class="input-s">

                            <input type="submit" id="submit" value="submit">
                        </div>
                    </div>
                </form>


            </div>
        </div>
        <div class="nav-right h-100 w-18">
            <div class="w-100 h-20"></div>
            <div class="w-100 h-90">

                <a class="back-now" href='?year=<?= date('Y'); ?>&month=<?= date('m'); ?>'>Back Now</a>
            </div>


        </div>

    </div>
    <div class="container">

        <div class="main" >
            <?php

            if (isset($_GET['month']) && (isset($_GET['year']))) {
                $month = $_GET['month'];
                $year = $_GET['year'];
            } else {
                $month = date('m');
                $year = date('Y');
            }
            ?>
            <div class="section1 w-100 h-25">
                <table class="year-month">
                    <tr class=>
                        <td class="h-50 w-45 left-number">
                            <?php
                            $thisMonth = date("Y");
                            $thisFirstDay = date("{$year}-{$month}-1");
                            $thisFirstDate = date('w', strtotime($thisFirstDay));
                            $thisMonthDays = date("t", strtotime($thisFirstDay));
                            $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
                            $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
                            $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));


                            echo "<h2 style='text-align:center'>";
                            echo date($year);
                            echo "</h2>";


                            ?>
                        </td>
                        <td class="h-50 w-10 slash" rowspan="2">
                            <img class="slash" src="./img/slash.png" alt="" width="50%" height="100%">
                        </td>
                        <td class="h-50 w-45 right-number">
                            <?php

                            echo "<h2 style='text-align:center'>";
                            echo date($month);
                            echo "</h2>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="h-50 w-45 left-year">Year</td>
                        <!-- <td class="h-50 w-10"></td> -->
                        <td class="h-50 w-45 right-month">Month</td>
                    </tr>
                </table>
            </div>
            <div class="section2 w-100 h-54">
                <?php

                $nextYear = $year;
                $prevYear = $year;

                if (($month + 1) > 12) {

                    $next = 1;
                    $nextYear = $nextYear + 1;
                } else {

                    $next = $month + 1;
                }

                if (($month - 1) < 1) {

                    $prev = 12;
                    $prevYear = $year - 1;
                } else {
                    $prev = $month - 1;
                }

                ?>
                <div class="main-center-left h-100 w-10">
                    <a class="a_left" href='?year=<?= $prevYear; ?>&month=<?= $prev; ?>'>◂</a>

                </div>
                <div class="main-center-center h-100 w-80 ">
                    <br>
                    <table>
                        <tr class="week">
                            <td>Sun
                            </td>
                            <td>Mon</td>
                            <td>Tue</td>
                            <td>Wed</td>
                            <td>Thr</td>
                            <td>Fri</td>
                            <td>Sat</td>
                        </tr>
                        <?php
                        for ($i = 0; $i < $weeks; $i++) {
                            if ($weeks < 5) {

                                echo "<tr class='tr-4'>";
                            } elseif ($weeks = 5) {

                                echo "<tr class='tr-5'>";
                            } else {
                                echo "<tr class='tr-6'>";
                            }

                            for ($j = 0; $j < 7; $j++) {
                                $addDays = 7 * $i + $j;
                                $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));

                                if ($thisCellDate < strtotime($thisFirstDay) || $thisCellDate > strtotime($thisLastDay)) {
                                    echo "<td class='td-not-month-day'>";
                                } elseif (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                                    echo "<td  class='td-weekend'>";
                                } else {
                                    echo "<td  class='td-date'>";
                                }
                                if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                                    echo date("j", $thisCellDate);
                                }
                                if (date("j", $thisCellDate) == date("j") && (date("m", $thisCellDate) == date("m")) && (date("Y", $thisCellDate) == date("Y"))&&(date('w', $thisCellDate) == 0)||date("j", $thisCellDate) == date("j") && (date("m", $thisCellDate) == date("m")) && (date("Y", $thisCellDate) == date("Y"))&&(date('w', $thisCellDate) == 6)) {
                                    echo "<p style='color:gold;background-color:rgba(154, 54, 128)'>Now</p>";
                                }elseif(date("j", $thisCellDate) == date("j") && (date("m", $thisCellDate) == date("m")) && (date("Y", $thisCellDate) == date("Y"))){
                                    echo "<p class='now' style='background-color:rgba(251, 183, 10);border-radius:15px;padding-bottom:2px'>Now</p>";
                                }

                                    

                                
                                if (date("j", $thisCellDate) == 8 && (date("m", $thisCellDate) == 8 && (date("Y", $thisCellDate) == 1887))) {
                                    echo "<p class='now'>鄉原古統</p>";
                                }
                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 28 && (date("m", strtotime($thisFirstDay)) == 2)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 28 && (date("m", strtotime($thisFirstDay)) == 2)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-dove'></i>&nbsp;和平紀念日</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 28 && (date("m", strtotime($thisFirstDay)) == 2))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-dove'></i>&nbsp;和平紀念日</p>";
                                }
                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 10
                                        && (date("m", strtotime($thisFirstDay)) == 10)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 10
                                    && (date("m", strtotime($thisFirstDay)) == 10)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-landmark-flag'></i>&nbsp;國慶日</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 10 && (date("m", strtotime($thisFirstDay)) == 10))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-landmark-flag'></i>&nbsp;國慶日</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 4
                                        && (date("m", strtotime($thisFirstDay)) == 4)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 4
                                    && (date("m", strtotime($thisFirstDay)) == 4)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-children'></i>&nbsp;兒童節</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 4 && (date("m", strtotime($thisFirstDay)) == 4))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-children'></i>&nbsp;兒童節</p>";
                                }
                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 28
                                        && (date("m", strtotime($thisFirstDay)) == 9)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 28
                                    && (date("m", strtotime($thisFirstDay)) == 9)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-person-chalkboard'></i>&nbsp;教師節</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 28 && (date("m", strtotime($thisFirstDay)) == 9))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-person-chalkboard'></i>&nbsp;教師節</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 5
                                        && (date("m", strtotime($thisFirstDay)) == 4)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 5
                                    && (date("m", strtotime($thisFirstDay)) == 4)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-seedling'></i>&nbsp;清明節</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 5
                                        && (date("m", strtotime($thisFirstDay)) == 4))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-seedling'></i>&nbsp;清明節</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 8
                                        && (date("m", strtotime($thisFirstDay)) == 8)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 8
                                    && (date("m", strtotime($thisFirstDay)) == 8)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-user-secret'></i>&nbsp;父親節</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 8
                                        && (date("m", strtotime($thisFirstDay)) == 8))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-sun'></i>&nbsp;父親節</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 25
                                        && (date("m", strtotime($thisFirstDay)) == 12)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 25
                                    && (date("m", strtotime($thisFirstDay)) == 12)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-candy-cane'></i>&nbsp;聖誕節</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 25
                                        && (date("m", strtotime($thisFirstDay)) == 12))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-candy-cane'></i>&nbsp;聖誕節</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 11
                                        && (date("m", strtotime($thisFirstDay)) == 11)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 11
                                    && (date("m", strtotime($thisFirstDay)) == 11)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-poo'></i>&nbsp;光棍節</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 11
                                        && (date("m", strtotime($thisFirstDay)) == 11))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-poo'></i>&nbsp;光棍節</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 1
                                        && (date("m", strtotime($thisFirstDay)) == 1)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 1
                                    && (date("m", strtotime($thisFirstDay)) == 1)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-champagne-glasses'></i>&nbsp;元旦</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 1
                                        && (date("m", strtotime($thisFirstDay)) == 1))
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-champagne-glasses'></i>&nbsp;元旦</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 25
                                        && (date("m", strtotime($thisFirstDay)) == 11)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 25
                                    && (date("m", strtotime($thisFirstDay)) == 11)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-gift'></i>&nbsp;感恩節</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 25
                                        && (date("m", strtotime($thisFirstDay)) == 11))
                                ) {
                                    echo "
                            <p class='festival-weekdays'><i class='fa-solid fa-gift'></i>&nbsp;感恩節</p>";
                                }
                                if (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)) &&
                                    date("m", strtotime($thisFirstDay)) == 5 &&
                                    date("w", $thisCellDate) == 0 &&
                                    date("j", $thisCellDate) > 7 &&
                                    date("j", $thisCellDate) <= 14
                                ) {
                                    echo "<p class='festival-weekend'><i class='fa-solid fa-person-breastfeeding'></i>&nbsp;母親節</p>";
                                }

                                if (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)) &&
                                    date("m", strtotime($thisFirstDay)) == 5 &&
                                    date("w", $thisCellDate) == 4 &&
                                    date("j", $thisCellDate) > 7 &&
                                    date("j", $thisCellDate) <= 14
                                ) {
                                    echo "<p class='festival-weekdays'><i class='fa-solid fa-ear-deaf'></i>&nbsp;打耳祭</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 8
                                        && (date("m", strtotime($thisFirstDay)) == 8)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 8
                                    && (date("m", strtotime($thisFirstDay)) == 8)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 郷原古統</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 8
                                        && (date("m", strtotime($thisFirstDay)) == 8))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 郷原古統</p>";
                                }


                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 8
                                        && (date("m", strtotime($thisFirstDay)) == 8)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 8
                                    && (date("m", strtotime($thisFirstDay)) == 8)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 石川欽一郎</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 8
                                        && (date("m", strtotime($thisFirstDay)) == 8))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 石川欽一郎</p>";
                                }
                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 27
                                        && (date("m", strtotime($thisFirstDay)) == 2)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 27
                                    && (date("m", strtotime($thisFirstDay)) == 2)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles fa-beat-fade'></i>&nbsp; 鹽月桃甫</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 27
                                        && (date("m", strtotime($thisFirstDay)) == 2))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles fa-beat-fade'></i>&nbsp; 鹽月桃甫</p>";
                                }


                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 7
                                        && (date("m", strtotime($thisFirstDay)) == 3)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 7
                                    && (date("m", strtotime($thisFirstDay)) == 3)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 黃土水</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 7
                                        && (date("m", strtotime($thisFirstDay)) == 3))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 黃土水</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 2
                                        && (date("m", strtotime($thisFirstDay)) == 2)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 2
                                    && (date("m", strtotime($thisFirstDay)) == 2)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 陳澄波</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 2
                                        && (date("m", strtotime($thisFirstDay)) == 2))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 陳澄波</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 2
                                        && (date("m", strtotime($thisFirstDay)) == 11)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 2
                                    && (date("m", strtotime($thisFirstDay)) == 11)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 陳進</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 2
                                        && (date("m", strtotime($thisFirstDay)) == 11))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 陳進</p>";
                                }


                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 10
                                        && (date("m", strtotime($thisFirstDay)) == 4)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 10
                                    && (date("m", strtotime($thisFirstDay)) == 4)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 郭雪湖</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 10
                                        && (date("m", strtotime($thisFirstDay)) == 4))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 郭雪湖</p>";
                                }


                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 1
                                        && (date("m", strtotime($thisFirstDay)) == 4)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 1
                                    && (date("m", strtotime($thisFirstDay)) == 4)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 林玉山</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 1
                                        && (date("m", strtotime($thisFirstDay)) == 4))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 林玉山</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 4
                                        && (date("m", strtotime($thisFirstDay)) == 1)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 4
                                    && (date("m", strtotime($thisFirstDay)) == 1)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 廖繼春</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 4
                                        && (date("m", strtotime($thisFirstDay)) == 1))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 廖繼春</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 13
                                        && (date("m", strtotime($thisFirstDay)) == 3)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 13
                                    && (date("m", strtotime($thisFirstDay)) == 3)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 李梅樹</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 13
                                        && (date("m", strtotime($thisFirstDay)) == 3))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 李梅樹</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 5
                                        && (date("m", strtotime($thisFirstDay)) == 10)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 5
                                    && (date("m", strtotime($thisFirstDay)) == 10)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 楊三郎</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 5
                                        && (date("m", strtotime($thisFirstDay)) == 10))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 楊三郎</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 13
                                        && (date("m", strtotime($thisFirstDay)) == 7)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 13
                                    && (date("m", strtotime($thisFirstDay)) == 7)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 李石樵</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 13
                                        && (date("m", strtotime($thisFirstDay)) == 7))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 李石樵</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 16
                                        && (date("m", strtotime($thisFirstDay)) == 1)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 16
                                    && (date("m", strtotime($thisFirstDay)) == 1)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 陳植棋</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 16
                                        && (date("m", strtotime($thisFirstDay)) == 1))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 陳植棋</p>";
                                }


                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 12
                                        && (date("m", strtotime($thisFirstDay)) == 8)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 12
                                    && (date("m", strtotime($thisFirstDay)) == 8)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 倪蔣懷</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 12
                                        && (date("m", strtotime($thisFirstDay)) == 8))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 倪蔣懷</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 2
                                        && (date("m", strtotime($thisFirstDay)) == 2)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 2
                                    && (date("m", strtotime($thisFirstDay)) == 2)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 林之助</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 2
                                        && (date("m", strtotime($thisFirstDay)) == 2))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 林之助</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 7
                                        && (date("m", strtotime($thisFirstDay)) == 5)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 7
                                    && (date("m", strtotime($thisFirstDay)) == 5)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 洪瑞麟</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 7
                                        && (date("m", strtotime($thisFirstDay)) == 5))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 洪瑞麟</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 21
                                        && (date("m", strtotime($thisFirstDay)) == 7)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 21
                                    && (date("m", strtotime($thisFirstDay)) == 7)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 郭柏川</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 21
                                        && (date("m", strtotime($thisFirstDay)) == 7))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 郭柏川</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 1
                                        && (date("m", strtotime($thisFirstDay)) == 3)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 1
                                    && (date("m", strtotime($thisFirstDay)) == 3)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 立石鐵臣</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 1
                                        && (date("m", strtotime($thisFirstDay)) == 3))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 立石鐵臣</p>";
                                }

                                if (((date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                        && date("j", $thisCellDate) == 12
                                        && (date("m", strtotime($thisFirstDay)) == 11)
                                        && (date('w', $thisCellDate) == 6))
                                    ||  (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay)))
                                    && date("j", $thisCellDate) == 12
                                    && (date("m", strtotime($thisFirstDay)) == 11)
                                    && (date('w', $thisCellDate) == 0)
                                ) {
                                    echo "<p class='birthday-weekend'><i class='fa-solid fa-cake-candles'></i>&nbsp; 國父誕辰</p>";
                                } elseif (
                                    date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))
                                    && (date("j", $thisCellDate) == 12
                                        && (date("m", strtotime($thisFirstDay)) == 11))
                                ) {
                                    echo "<p class='birthday-weekdays'><i class='fa-solid fa-cake-candles'></i>&nbsp; 國父誕辰</p>";
                                }
                                echo "</td>";
                            }
                            echo "</tr>";
                        }

                        echo "</table>";
                        ?>


                </div>
                <div class="main-center-right h-100 w-10 ">
                    <a class="a_right" href='?year=<?= $nextYear; ?>&month=<?= $next; ?>'>▸</a>
                </div>
            </div>
            <div class="section3 w-100 h-5 main-bottom">

                <p><small>&copy;Copyright WSL Web All Rights Reserved./Images credit all for 鄉原古統.</small></p>

            </div>

        </div>
        
        <div class="aside">

            <div class="aside-left h-100 w-73" >


                <?php
                if ($month == 1) {
                    $img = "A";
                }
                if ($month == 2) {
                    $img = "B";
                }
                if ($month == 3) {
                    $img = "C";
                }
                if ($month == 4) {
                    $img = "D";
                }
                if ($month == 5) {
                    $img = "E";
                }
                if ($month == 6) {
                    $img = "F";
                }
                if ($month == 7) {
                    $img = "G";
                }
                if ($month == 8) {
                    $img = "H";
                }
                if ($month == 9) {
                    $img = "I";
                }
                if ($month == 10) {
                    $img = "J";
                }
                if ($month == 11) {
                    $img = "K";
                }
                if ($month == 12) {
                    $img = "L";
                }
                switch ($img) {
                    case "A":
                        echo "<a href='https://www.tfam.museum/Collection/CollectionDetail.aspx?CID=3426&ddlLang=zh-tw' target='_blank'>
                        <img  src='./img/A.jpg' alt='100%'  height='770px' width='687.5px'>
                        </a>";

                        break;
                    case "B":


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501875&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/B.jpg' alt='100%'  height='770px' width='687.5px'>
                </a>";

                        break;
                    case "C";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501870&IndexCode=Culture_Object' target='_blank'>
                        <img src='./img/C.jpg' alt='100%'  height='770px' width='687.5px'></a>";

                        break;
                    case "D";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501867&IndexCode=Culture_Object' target='_blank'>
                        <img src='./img/D.jpg' alt='100%' height='770px' width='687.5px'>
                </a>";

                        break;
                    case "E";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501877&IndexCode=Culture_Object' target='_blank'>
                        <img src='./img/E.jpg' alt='100%' height='770px' width='687.5px'>
                </a>";

                        break;
                    case "F";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501882&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/F.jpg' alt='100%'  height='770px' width='687.5px'>
                </a>";

                        break;
                    case "G";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501873&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/G.jpg' alt='100%'  height='770px' width='687.5px'>
                </a>";

                        break;
                    case "H";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501881&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/H.jpg' alt='100%'  height='770px' width='687.5px'>
                </a>";

                        break;
                    case "I";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501883&IndexCode=Culture_Object' target='_blank'>
                        <img src='./img/I.jpg' alt='100%' height='770px' width='687.5px'>
                </a>";

                        break;
                    case "J";



                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501865&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/J.jpg' alt='100%'  height='770px' width='687.5px'></a>";

                        break;
                    case "K";


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501879&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/K.jpg' alt='100%' height='770px' width='687.5px'>
                </a>";

                        break;
                    default;


                        echo "<a href='https://memory.culture.tw/Home/Detail?Id=501880&IndexCode=Culture_Object' target='_blank'>
                <img src='./img/L.jpg' alt='100%' height='770px' width='687.5px'></a>";

                        break;
                }
                ?>

            </div>

            
            <div class="aside-right h-100 w-27">
                <?php

                if ($month == 1) {

                    echo '<div class="box-title-bg" style=" background-color:rgba(244, 71, 24,0.55)"></div>';
                    echo " <div class='box-title-w' style='color:rgba(232, 176, 4)'>
臺<br>北<br>名<br>所<br>繪<br>畫<br>十<br>二<br>景<br></div>";
                    echo '</div>

<div class="box-author-w-special">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;郷&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 原&nbsp;&nbsp; &nbsp;&nbsp; 古&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 統

</div>';
                    echo '<a href="https://zh.wikipedia.org/zh-tw/%E9%84%89%E5%8E%9F%E5%8F%A4%E7%B5%B1" target="_blank">
<div class="box-author-bg-special">

</div>
</a>';
                } else {

                    echo '<div class="box-title-bg">
</div>';
                    echo " <div class='box-title-w'>
臺<br>北<br>名<br>所<br>繪<br>畫<br>十<br>二<br>景<br>
</div>";
                    echo '</div>

                    <div class="box-author-w">
                    &nbsp;郷&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 原&nbsp;&nbsp; &nbsp;&nbsp; 古&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 統
                    
                    </div>';
                    echo '<a href="https://zh.wikipedia.org/zh-tw/%E9%84%89%E5%8E%9F%E5%8F%A4%E7%B5%B1" target="_blank">
<div class="box-author-bg">

</div>
</a>';
                }
                ?>
                
          
        </div>

    </div>
    <?php
if($month==1||$month==2){
    echo '
<div class="content">
<div id="rainBox"></div>
</div>';}




    ?>
     
    <script>
        const box = document.getElementById('rainBox');
        let boxHeight = box.clientHeight;
        let boxWidth = box.clientWidth;
        window.onresize = function() {
            boxHeight = box.clientHeight;
            boxWidth = box.clientWidth;
        }

        function rainDot() {
            let rain = document.createElement('div');
            rain.classList.add('rain');
            rain.style.top = `${boxHeight / 7}px`;  
            rain.style.left = `${Math.random() * boxWidth}px`;
            rain.style.opacity = Math.random();
            box.appendChild(rain);

            let gap = 0.05;
            const loop = setInterval(() => {
                if (parseInt(rain.style.top) > boxHeight) {
                    clearInterval(loop);
                    box.removeChild(rain)
                }
                gap++
                rain.style.top = `${parseInt(rain.style.top)+gap}px`;
            }, 10)
        }
        setInterval(() => {
            rainDot();
        }, 7)
    </script>
</body>

</html>