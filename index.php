<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WSL Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=DotGothic16&family=IBM+Plex+Sans+JP&family=Josefin+Slab&family=Noto+Sans+TC:wght@300&family=Noto+Serif+TC:wght@300&family=Orbitron&family=Rubik+Doodle+Shadow&family=Rubik+Scribble&family=Zen+Old+Mincho&display=swap');


    * {
        margin: 0;
        box-sizing: border-box;

    }

    body {
        border-top: 10px solid #8bafb4;
        background-color: beige;
        overflow-x: auto;
    }

    .container {
        width: 100vw;
        height: 100%;


    }

    @media screen and (min-width: 1000px) {
        .container {
            display: flex;
        }
    }

    .box {
        width: 58%;
        height: 100%;
        margin: auto;

    }

    .start {
        width: 8%;
    }

    .aside {
        width: 22.5%;
    }

    @media screen and (max-width: 1000px) {
        .aside {
            margin-right: auto;
            display: flex;
        }

        .aside-top>img {
            width: 250px;
        }
    }

    @media screen and (max-width: 1000px) {
        .aside-bottom>.row {
            position: relative;
            top: 75px;
            left: 15px;
            width: 200px
        }
    }

    @media screen and (max-width: 450px) {
        .aside-top>img {
            width: 200px;
            left: 45px;
        }

        .aside-bottom>.row {
            position: relative;
            top: 75px;
            left: 10px;
            width: 200px
        }
    }

    .middle {
        width: 8%;
    }

    .main {
        width: 50%;
    }

    @media screen and (max-width: 1000px) {
        .main {
            margin: auto;
            width: 100%
        }
    }

    @media screen and (max-width: 1000px) {
        .box {
            margin: auto;
            width: 90%
        }
    }

    /* .aside-top,
    .aside-bottom,
    .main-top,
    .main-bottom,
    .box,
    .box>.section {
        border: 1px solid black
    } */

    .aside-bottom {}

    .test:hover {
        & .col-2 .circle {
            background-color: #8bafb4;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
        }
    }

    .circle {
        width: 10px;
        height: 10px;

        border-radius: 50%;
        border-color: gray 2px;
        background-color: gainsboro;
        color: #fff;
        border: none;
        cursor: pointer;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5);
    }

    table {
        width: 100%;

    }

    .td1 {
        width: 18%;

    }

    .td2 {
        width: 20%
    }

    .td3 {
        width: 18%;

    }

    .td4 {}

    table,
    td {
        border: 1px dotted #00707f;
        margin-top: 10px;
        text-align: center;
        padding: 5px
    }

    td {
        height: 50px;
        /* font-family: Noto+Sans+TC; */
    }

    td>div {

        background-color: #7cbcc4;
        color: #fff;
        /* font-size: large; */
        border-radius: 30px;
        height: 30px;
        width: 100%;
        padding-top: 2px;
        text-align: center;

    }

    .skill-box {
        background-color: goldenrod;
        color: #fff;
        /* font-size: large; */
        border-radius: 30px;
        width: 50%;
        text-align: center;
        margin: auto;
    }

    @media screen and (max-width: 767px) {

        .skill-box,
        td>div {
            padding-top: 4px;
        }

    }

    @media screen and (max-width: 450px) {

        .skill-box,
        td>div {
            padding-top: 6px;
        }

    }

    .skills {
        text-align: left;
    }

    .aside-top>img {
        margin-top: 100px;
        text-align: center;
    }

    .font-river {
        color: red;
        font-weight: bold;
        font-family: Josefin Slab
    }

    h2 {
        color: #00707f;
        font-weight: bold;
        font-size: 30px;
        font-family: Rubik Doodle Shadow;
        padding-bottom: 5px;
        border-bottom: 1px solid#00707f;
    }

    h2>span {
        font-size: 40px;
    }

    h3 {
        color: lightcoral;
        font-size: 25px;
        font-family: DotGothic16;
        font-weight: 600;
        margin-bottom: 20px;
        margin-top: 20px;
        border-left: 15px solid lightcoral
    }

    h4 {
        color: darkgoldenrod;
        font-size: large;
        font-family: DotGothic16
    }

    .section>div>h4,
    .section>h4 {

        color: darkgoldenrod;
        opacity: 0.8;
        font-size: 23px;
        font-family: DotGothic16
    }

    a {
        text-decoration: none;
        color: rgba(128, 128, 128, 0.763);

    }

    a:hover {
        text-decoration: none;
        color: goldenrod;
        font-size: larger;
        font-weight: bolder;

    }

    p,
    td {}





    .online_store_pic:hover {
        /* width: 210%; */
        width: 100%;
        z-index: 1;

    }

    .remind {
        text-align: end;
        color: crimson;
        font-size: 18px;
        font-family: DotGothic16
    }

    .remind:hover {
        color: #8bafb4;
        font-weight: 500;
    }

    .calendar_pic:hover {
        /* width: 170%; */
        width: 100%;

    }


    .section img {
        position: relative;
        /* z-index: 0; */
        /* transition: z-index 0.3s ease; */
    }

    div>a {
        color: lightslategray;
    }

    .fw-bold {
        color: gray
    }

    footer {
        width: 100%;
        height: 10vh;
        border-bottom: 10px solid #8bafb4;
    }

    .top {
        position: fixed;
        right: 50px;
        bottom: 30px;

        color: #00707f;
        font-weight: bold;
        font-size: 30px;
        font-family: Rubik scribble;
        /* border-bottom: 1px solid#00707f;   */
    }

    .myBtn {
        background-color: #7cbcc4;
        color: #fff;
    }
    .my-ms-4{
        margin-left:22px
    }

    @media screen and (max-width: 767px) {
        .circle {
            margin-top: 5px;
        }

        td {
            font-size: smaller;
        }
        .remind{
            font-size: 10px;
        }
        .my-ms-4{
        margin-left:10px
    }
    }

    @media screen and (max-width: 767px) {
        .online_store_pic:hover {
            width: 230%;
            z-index: 1;
        }
    }

    @media screen and (max-width: 767px) {
        .calendar_pic:hover {
            width: 218%;
            z-index: 1;
        }
    }

    @media screen and (max-width: 767px) {
        .poster-modal img {
            width: 50%;
            height: 50%;

            margin-left: 300px
        }

        .poster-modal>.modal-dialog>img {
            width: 485px;

        }

    }

    @media screen and (max-width: 767px) {
        .calendar-modal img {
            width: 50%;
            height: 50%;

            margin-left: 300px
        }

        .calendar-modal>.modal-dialog>img {
            width: 485px;

        }
    }

    @media screen and (max-width: 767px) {
        .banner-modal img {
            width: 50%;
            height: 50%;

            margin-left: 300px;

        }

        .banner-modal>.modal-dialog>img {
            width: 485px;

        }
    }

    @media screen and (max-width: 767px) {
        .poster-modal>.modal-dialog>img {
            width: 415px;

        }

        .calendar-modal>.modal-dialog>img {
            width: 415px;

        }

        .banner-modal>.modal-dialog>img {
            width: 430px;

        }
    }

    @media screen and (min-width: 767px) {
        .abbr {
            display: none;
        }

    }

    @media screen and (max-width: 767px) {
        .none-abbr {
            display: none;
        }

        .abbr-td {

            width: 13.5%;
            margin: auto;
            text-align: center;
        }
        .halloween{
      display: none;
        }
    }
</style>

</style>

<body>
    <div class="top"><a href="#">TOP</a></div>
    <div class="container">

        <div class="start"></div>
        <div class="aside">
            <div class="aside-top text-center pt-10">
                <img src="./img/profile1.jpg" class="me-3" width="275px" alt="">
            </div>
            <div class="aside-bottom mt-5">
                <!-- <div class="row test mt-3">
                    <div class="col-10 text-start font-river mt-1"><a href="#">Story</a></div>
                    <div class="col-2 pt-1">
                        <div class="circle"></div>
                    </div>
                </div> -->
                <div class="row test">
                    <div class="col-10 text-start font-river mt-1"><a href="#about">About WSL</a></div>
                    <div class="col-2 pt-1">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="row test">
                    <div class="col-10 text-start  font-river mt-1"><a href="#web">Web Design</a></div>
                    <div class="col-2 pt-1">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="row test">
                    <div class="col-10 text-start  font-river mt-1"><a href="#graphic">Graphic Design</a></div>
                    <div class="col-2 pt-1">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="row test">
                    <div class="col-10 text-start font-river mt-1"><a href="http://" data-bs-toggle="modal" data-bs-target="#contact">Contact</a></div>
                    <div class="col-2 pt-1">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle"></div>
        <div class="main">
            <!-- <div class="section" id="story">
                <h2><span>S</span>tory</h2>
                <h4>從此踏上軟體工程師道路的藝術人...</h4>

                <p class="mt-5">安安安</p>
            </div> -->
            <div class="section" style="margin-top:100px" id="about">
                <h2><span>A</span>bout &nbsp; &nbsp; &nbsp;Wun-Sheng &nbsp;, &nbsp;Liao &nbsp;(&nbsp;WSL&nbsp;)</h2>

                <table>
                    <tr>
                        <td class="td1 test-center">
                            <div style="width:70%;margin: auto;">Name</div>
                        </td>
                        <td class="td2 fw-bold">廖文聖

                        </td>
                        <td class="td3 abbr-td">
                            <div class="none-abbr">Education</div>
                            <div class="abbr">Edu.</div>
                        </td>
                        <td class="td4 align-items-sm-center fw-bold">國立臺灣大學
                            戲劇研究所 碩士
                        </td>
                    </tr>

                    <tr>
                        <td class="td1" rowspan="4">
                            <div style="width:70%;margin: auto;">Skills</div>
                        </td>
                        <td class="td2">
                            <div class="skill-box">前端</div>
                        </td>
                        <!-- <td class="td3" colspan="2">
                            <div>Education</div>
                        </td> -->
                        <td class="td4 align-items-sm-center skills fw-bold" colspan="2">
                            HTML、CSS、Javascript、Bootstrap、RWD
                        </td>
                    </tr>
                    <tr>
                        <!-- <td class="td1"> -->
                        <!-- <div style="width:70%;margin: auto">Skills</div> -->
                        <!-- </td> -->
                        <td class="td2" rowspan="2">
                            <div class="skill-box">後端</div>
                        </td>
                        <!-- <td class="td3" colspan="2">
                            <div>Education</div>
                        </td> -->
                        <td class="td4 align-items-sm-center skills fw-bold" colspan="2">PHP、MySQL、jQuery
                        </td>
                    </tr>
                    <tr>
                        <!-- <td class="td1"> -->
                        <!-- <div style="width:70%;margin: auto">Skills</div> -->
                        <!-- </td> -->
                        <!-- <td class="td2"></td> -->
                        <!-- <td class="td3" colspan="2">
                            <div>Education</div>
                        </td> -->
                        <td class="td4 align-items-sm-center skills fw-bold" colspan="2">Git版本控制、Ajax、CRUD、Laravel
                        </td>
                    </tr>
                    <tr>
                        <!-- <td class="td1"> -->
                        <!-- <div style="width:70%;margin: auto">Skills</div> -->
                        <!-- </td>  -->
                        <td class="td2">
                            <div class="skill-box">平面</div>
                        </td>
                        <!-- <td class="td3" colspan="2">
                            <div>Education</div>
                        </td> -->
                        <td class="td4 align-items-sm-center skills fw-bold" colspan="2">Photoshop、Illustrator
                        </td>
                    </tr>
                    <tr>
                        <td class="td1">
                            <div class="none-abbr">Languages</div>
                            <div class="abbr">Langs.</div>
                        </td>
                        <td class="td2 me-5 fw-bold" colspan="3">中文(母語)、英文(精通)、台語(精通)、日文(初學)</td>
                        <!-- <td class="td3">
                            <div>Education</div>
                        </td>
                        <td class="td4 align-items-sm-center">國立臺灣大學
                            戲劇研究所 碩士
                        </td> -->
                    </tr>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> -->
                </table>
            </div>

        </div>

    </div>
    <div class="box mt-5">


        <h2 id="web"><span>W</span>eb Design</h2>
        <h3 class="mb-4">&nbsp;全端（Full-stack）</h3>
        <h4 style="font-size:23px;color:purple;text-decoration:underline">購物商城網站</h4>
        <div class="section" id="web" style="display: flex;">

            <div>


                <h4 class="mt-2">前台</h4>
                <a href="./online_store/index.php">
                    <img class="mt-2 online_store_pic" src="./img/online_store2.jpg" width="96%" alt="">
                </a>

            </div>
            <div> </div>
            <div>

                <h4 class="my-ms-4 mt-2">後台</h4>

                <a href="./online_store/back_login.php">
                    <img class="mt-2 online_store_pic online_store_back_pic my-ms-4" src="./img/online_store3.jpg" width="95%" alt="">
                </a>

                <div class="mt-1"><a href="http://" data-bs-toggle="modal" data-bs-target="#contact">
                        <div class="remind pe-1">管理員帳密由<span style="text-decoration:underline"> WSL </span>提供，歡迎留言索取</div>
                    </a></div>
            </div>

        </div>

        <h2 id="web" class="mt-3"></h2>
        <h3>&nbsp;前端（Front-end）</h3>
        <div class="section" id="web" style="display: flex;">

            <div>

                <h4>線上課程網站<span class="halloween">（萬聖節主題）</span></h4>

                <a href="./side_project/online_course_store">
                    <img class="mt-2 online_store_pic" src="./img/online_course.jpg" width="96%" alt="">
                </a>

            </div>
            <div></div>
            <div>

                <h4 class="my-ms-4">學校資料庫前台</h4>

                <a href="./side_project/school">
                    <img class="mt-2 online_store_pic my-ms-4" style="box-shadow: 10px 5px 5px #cdcd9b;" src="./img/school1.jpg" width="94%" alt="">
                </a>

            </div>

        </div>
        <div class="section" id="web" style="display: flex;">

            <div>

                <h4 class="mt-4">前端切版練習</h4>

                <a href="./side_project/front_pra_yukigi">
                    <img class="mt-2 online_store_pic" src="./img/yukigi.jpg" width="48%" alt="">
                </a>

            </div>
            <div></div>
            <!-- <div>

                <h4 class="my-ms-4">學校資料庫前台</h4>

                <a href="./side_project/school">
                    <img class="mt-2 online_store_pic my-ms-4" style="box-shadow: 10px 5px 5px #cdcd9b;" src="./img/school1.jpg" width="96%" alt="">
                </a>

            </div> -->

        </div>
        <h2 id="web" class="mt-3"></h2>
        <h3>&nbsp;後端（Back-end）</h3>
        <div class="section" id="web" style="display: flex;">

            <!-- <div>

                <h4>購物商城網站</h4>

                <a href="./online_store/index.php">
                    <img class="mt-2 online_store_pic" src="./img/online_store2.jpg" width="100%" alt="">
                </a>

            </div>
            <div></div> -->
            <div class="" style="margin-top:0px">
                <h4>萬年暦</h4>

                <a href="./calendar/index.php">
                    <img src="./img/calendar.jpg" width="47%" alt="" class="calendar_pic"></a>
            </div>

        </div>
        <!-- <div class="remind">點圖片可以直接到網站～～</div> -->


        <h2 style="margin-top:40px" id="graphic"><span>G</span>raphic Design</h2>
        <div class="section" style="display: flex;">



            <div>

                <h4>海報</h4>

                <img class="mt-2" src="./img/poster.jpg" width="100%" alt="" data-bs-toggle="modal" data-bs-target="#poster">


            </div>
            <div></div>
            <div class="ms-5">
                <h4>年暦</h4>

                <img src="./img/calendar1.jpg" class="mt-2" width="100%" alt="" data-bs-toggle="modal" data-bs-target="#calendar_pic">
            </div>

        </div>
        <div class="section mt-3" id="graphic" style="display: flex;">
            <div style="margin-top:50px">
                <h4>Banner</h4>

                <img src="./img/banner.jpg" width="53%" alt="" data-bs-toggle="modal" data-bs-target="#banner">
            </div>
        </div>
    </div>
    <footer id="footer"></footer>

    <!-- contact Modal -->
    <div class="modal" id="contact">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">歡迎留下消息～(*´∀`)~♥</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="./message.php" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bold">寄信人</span>
                                    <input type="text" class="form-control" placeholder="e-mail" name="sender">

                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bold">收件人</span>
                                    <input type="text" class="form-control" disabled placeholder="wunshengliao@gmail.com">

                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bold">主旨</span>
                                    <input type="text" class="form-control" name="subject">

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="bold mt-3">信件內容</p>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="comment" name="text" placeholder="Comment goes here"></textarea>
                                            <label for="comment"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="btn myBtn mt-3" style="margin-left:400px" type="submit" value="送出">
                    </form>
                </div>



            </div>
        </div>
    </div>



    <!-- Poster Modal -->
    <div class="modal poster-modal" id="poster">
        <div class="modal-dialog" style="right:302px">



            <!-- Modal body -->

            <img src="./img/poster.jpg" width="221%" alt="">


            <!-- Modal footer -->

            <button type="button" class="btn btn-danger class mt-2" style="margin-left:1039px" data-bs-dismiss="modal">Close</button>



        </div>
    </div>



    <!-- Calendar_pic Modal -->
    <div class="modal calendar-modal" id="calendar_pic">
        <div class="modal-dialog" style="right:302px">



            <!-- Modal body -->

            <img src="./img/calendar1.jpg" width="221%" alt="">


            <!-- Modal footer -->

            <button type="button" class="btn btn-danger class mt-2" style="margin-left:1039px" data-bs-dismiss="modal">Close</button>



        </div>
    </div>


    <!-- Banner Modal -->
    <div class="modal banner-modal" id="banner">
        <div class="modal-dialog" style="right:310px;top:100px">



            <!-- Modal body -->

            <img src="./img/banner.jpg" width="221%" alt="">


            <!-- Modal footer -->

            <button type="button" class="btn btn-danger class mt-2" style="margin-left:1039px" data-bs-dismiss="modal">Close</button>



        </div>
    </div>
</body>


</html>