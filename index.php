<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WSL Portfolio</title>
    <link rel="icon" href="./img/fort-awesome-alt.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<style>


    @keyframes animate {
      0% {
        text-shadow: 0 0 1px rgba(255, 255, 135, 1), 0 0 1px rgba(255, 255, 0, 1);
      }

      50% {
        text-shadow: 0 0 1px rgba(255, 255, 135, 1), 0 0 20px rgba(255, 255, 0, 1);
      }

      100% {
        text-shadow: 0 0 1px rgba(255, 255, 135, 1), 0 0 1px rgba(255, 255, 0, 1);
      }
    }
 
</style>

</head>
</head>


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
                            HTML、CSS、Javascript、Ajax、Bootstrap、RWD
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
                        <td class="td4 align-items-sm-center skills fw-bold" colspan="2">Git版本控制、CRUD、Laravel
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
    <div id="web" class="box mt-5">

        <div class="d-flex ms-1 full-name" style="position:relative;left:313px;top:63px">

            <div class="mt-3 web-tag web-tag-full" id="full">
                <h3 class="full">&nbsp;全端（Full-stack）</h3>
            </div>

            <div class="mt-3 ms-5 web-tag web-tag-front" id="front">
                <h3 class="front">&nbsp;前端（Front-end）</h3>
            </div>

            <div class="mt-3 ms-5 web-tag web-tag-back" id="back">
                <h3 class="back">&nbsp;後端（Back-end）</h3>

            </div>

        </div>

        <h2 style="margin-top:10px"><span>W</span>eb Design</h2>
        <div class="row abbr-name">
            <div class="col-lg-1"></div>
            <div class="col-3 col-lg-3  mt-3 web-tag-abbr" id="full-abbr">
                <h3 class="full-abbr">&nbsp;全端</h3>
            </div>

            <div class="col-3  col-lg-3 mt-3 ms-4 web-tag-abbr" id="front-abbr">
                <h3 class="front-abbr">&nbsp;前端</h3>
            </div>

            <div class="col-3  col-lg-3 mt-3 ms-4 web-tag-abbr" id="back-abbr">
                <h3 class="back-abbr">&nbsp;後端</h3>

            </div>
            <div class="col-lg-1 me-5"></div>
        </div>

        <div class="full-works">
            <!-- <h3 class="mb-4 ">&nbsp;全端（Full-stack）</h3> -->

            <h4 class="mt-4" style="font-size:23px;color:purple;text-decoration:underline">購物商城網站</h4>
            <div class="section" style="display: flex;">

                <div>


                    <h4 class="mt-2">前台</h4>
                    <a href="./online_store/index.php">
                        <img id="deviceNotice" class="mt-2 online_store_pic" src="./img/online_store2.jpg" width="96%" alt="">
                    </a>

                </div>
                <div> </div>
                <div>

                    <h4 class="my-ms-4 mt-2">後台</h4>

                    <a href="./online_store/back_login.php">
                        <img id="requestAdmin" class="mt-2 online_store_pic online_store_back_pic my-ms-4" src="./img/online_store3.jpg" width="95%" alt="">
                    </a>

                    <div class="mt-1"><a href="http://" data-bs-toggle="modal" data-bs-target="#contact">
                            <div class="remind pe-1">管理員帳密由<span style="text-decoration:underline"> WSL </span>提供，歡迎留言索取</div>
                        </a></div>
                </div>

            </div>
        </div>

        <div class="front-works mt-4">
            <h2 class="mt-3 full-works"></h2>
            <!-- <h3>&nbsp;前端（Front-end）</h3> -->
            <div class="section" style="display: flex;">

                <div>

                    <h4>線上課程網站<span class="halloween">（萬聖節主題）</span></h4>

                    <a id="noPhone" href="./side_project/online_course_store">
                        <img class="mt-2 online_store_pic" src="./img/online_course.jpg" width="96%" alt="">
                    </a>

                </div>
                <div></div>
                <div>

                    <h4 class="my-ms-4">學校資料庫前台</h4>

                    <a href="./side_project/school" id="noPhone1">
                        <img class="mt-2 online_store_pic my-ms-4" style="box-shadow: 10px 5px 5px #cdcd9b;" src="./img/school1.jpg" width="94%" alt="">
                    </a>

                </div>

            </div>
            <div class="section" style="display: flex;">

                <div>

                    <h4 class="mt-4">前端切版練習</h4>

                    <a href="./side_project/front_pra_yukigi" id="noPhone2">
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
        </div>

        <div class="back-works mt-4">
            <h2 class="mt-3 full-works"></h2>
            <!-- <h3>&nbsp;後端（Back-end）</h3> -->
            <div class="section" style="display: flex;">

                <!-- <div>

                <h4>購物商城網站</h4>

                <a href="./online_store/index.php">
                    <img class="mt-2 online_store_pic" src="./img/online_store2.jpg" width="100%" alt="">
                </a>

            </div>
            <div></div> -->
                <div class="" style="margin-top:0px">
                    <h4>萬年暦</h4>

                    <a href="./calendar/index.php" id="noPhone3">
                        <img src="./img/calendar.jpg" width="47%" alt="" class="calendar_pic"></a>
                </div>

            </div>
            <!-- <div class="remind">點圖片可以直接到網站～～</div> -->
        </div>

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
    <div class="modal fade" id="contact">
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
    <div class="modal fade poster-modal" id="poster">
        <div class="modal-dialog" style="right:302px">



            <!-- Modal body -->

            <img src="./img/poster.jpg" width="221%" alt="">


            <!-- Modal footer -->

            <button type="button" class="btn btn-danger class mt-2" style="margin-left:1039px" data-bs-dismiss="modal">Close</button>



        </div>
    </div>



    <!-- Calendar_pic Modal -->
    <div class="modal fade calendar-modal" id="calendar_pic">
        <div class="modal-dialog" style="right:302px">



            <!-- Modal body -->

            <img src="./img/calendar1.jpg" width="221%" alt="">


            <!-- Modal footer -->

            <button type="button" class="btn btn-danger class mt-2" style="margin-left:1039px" data-bs-dismiss="modal">Close</button>



        </div>
    </div>


    <!-- Banner Modal -->
    <div class="modal fade banner-modal" id="banner">
        <div class="modal-dialog" style="right:310px;top:100px">



            <!-- Modal body -->

            <img src="./img/banner.jpg" width="221%" alt="">


            <!-- Modal footer -->

            <button type="button" class="btn btn-danger class mt-2" style="margin-left:1039px" data-bs-dismiss="modal">Close</button>



        </div>
    </div>
</body>


</html>
  <!-- jQuery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js'></script>
  <!-- bootstrap -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.js'></script>
  <!-- 引入 gsap 主程式 -->
  <script src="./gsap/gsap.js"></script>


<script>
    $(document).ready(function() {
        $(".full-works").show();
        $(".front-works").hide();
        $(".back-works").hide();
        $(".full").css("color", "rgb(246, 246, 161)");
        // $(".full").css("border-left", "  15px solid rgb(230, 230, 150)");
        $(".web-tag-full").css("background-color", "#00707fa0");
        $(".front").css("color", "gray");
        // $(".front").css("border-left", "  15px solid gainsboro");
        $(".back").css("color", "gray");
        // $(".back").css("border-left", "  15px solid gainsboro");
        $(".full-works").show();
        $(".front-works").hide();
        $(".back-works").hide();
        $(".full-abbr").css("color", "#00707fa0");
        $(".full-abbr").css("border-left", "  15px solid #00707fa0");
        $(".front-abbr").css("color", "gainsboro");
        $(".front-abbr").css("border-left", "  15px solid gainsboro");
        $(".back-abbr").css("color", "gainsboro");
        $(".back-abbr").css("border-left", "  15px solid gainsboro");
        $("#full").click(function() {
            $(".full-works").show();
            $(".front-works").hide();
            $(".back-works").hide();
            $(".full").css("color", "rgb(246, 246, 161)");
            // $(".full").css("border-left", "  15px solid rgb(246, 246, 161)");
            $(".web-tag-full").css("background-color", "#00707fa0");
            $(".front").css("color", "gray");
            // $(".front").css("border-left", "  15px solid gainsboro");
            $(".web-tag-front").css("background-color", "rgb(230, 230, 150)");
            $(".back").css("color", "gray");
            // $(".back").css("border-left", "  15px solid gainsboro");
            $(".web-tag-back").css("background-color", "rgb(230, 230, 150)");
        });
        $("#front").click(function() {
            $(".full-works").hide();
            $(".front-works").show();
            $(".back-works").hide();
            $(".full").css("color", "gray");
            // $(".full").css("border-left", "  15px solid gainsboro");
            $(".web-tag-full").css("background-color", "rgb(230, 230, 150)");
            $(".front").css("color", "rgb(246, 246, 161)");
            // $(".front").css("border-left", "  15px solid rgb(246, 246, 161)");
            $(".web-tag-front").css("background-color", "#00707fa0");
            $(".back").css("color", "gray");
            // $(".back").css("border-left", "  15px solid gainsboro");
            $(".web-tag-back").css("background-color", "rgb(230, 230, 150)");
        });
        $("#back").click(function() {
            $(".full-works").hide();
            $(".front-works").hide();
            $(".back-works").show();
            $(".full").css("color", "gray");
            // $(".full").css("border-left", "  15px solid gainsboro");
            $(".web-tag-full").css("background-color", "rgb(230, 230, 150)");
            $(".front").css("color", "gray");
            // $(".front").css("border-left", "  15px solid gainsboro");
            $(".web-tag-front").css("background-color", "rgb(230, 230, 150)");
            $(".back").css("color", "rgb(246, 246, 161)");
            // $(".back").css("border-left", "  15px solid rgb(246, 246, 161)");
            $(".web-tag-back").css("background-color", "#00707fa0");
        });
    });

    $(document).ready(function() {
        $("#full-abbr").click(function() {
            $(".full-works").show();
            $(".front-works").hide();
            $(".back-works").hide();
            $(".full-abbr").css("color", "#00707fa0");
            $(".full-abbr").css("border-left", "  15px solid #00707fa0");
            $(".front-abbr").css("color", "gainsboro");
            $(".front-abbr").css("border-left", "  15px solid gainsboro");
            $(".back-abbr").css("color", "gainsboro");
            $(".back-abbr").css("border-left", "  15px solid gainsboro");
        });
        $("#front-abbr").click(function() {
            $(".full-works").hide();
            $(".front-works").show();
            $(".back-works").hide();
            $(".full-abbr").css("color", "gainsboro");
            $(".full-abbr").css("border-left", "  15px solid gainsboro");
            $(".front-abbr").css("color", "#00707fa0");
            $(".front-abbr").css("border-left", "  15px solid #00707fa0 ");
            $(".back-abbr").css("color", "gainsboro");
            $(".back-abbr").css("border-left", "  15px solid gainsboro");
        });
        $("#back-abbr").click(function() {
            $(".full-works").hide();
            $(".front-works").hide();
            $(".back-works").show();
            $(".full-abbr").css("color", "gainsboro");
            $(".full-abbr").css("border-left", "  15px solid gainsboro");
            $(".front-abbr").css("color", "gainsboro");
            $(".front-abbr").css("border-left", "  15px solid gainsboro");
            $(".back-abbr").css("color", "#00707fa0");
            $(".back-abbr").css("border-left", "  15px solid #00707fa0 ");
        });
    });

    document.getElementById('requestAdmin').addEventListener('click', function() {

        alert('管理員帳密，歡迎來信索取～wunshengliao@gmail.com');

    });

    document.getElementById('deviceNotice').addEventListener('click', function() {
        if (window.innerWidth < 776) {
            alert('此網站另有【電腦版】，歡迎使用電腦開啟～');
            document.getElementById('noPhone').href = 'index.php';
        }else{

            alert('此網站另有【手機版】，歡迎使用手機開啟～');
            document.getElementById('noPhone').href = 'index.php';
        }
    });
    document.getElementById('noPhone').addEventListener('click', function() {
        if (window.innerWidth < 1200) {
            alert('此網站不支援手機及平板瀏覽>"""<，請使用電腦開啟！');
            document.getElementById('noPhone').href = 'index.php';
        }
    });
    document.getElementById('noPhone1').addEventListener('click', function() {
        if (window.innerWidth < 776) {
            alert('此網站不支援手機瀏覽>"""<，請使用電腦開啟！');
            document.getElementById('noPhone1').href = 'index.php';
        }
    });
    document.getElementById('noPhone2').addEventListener('click', function() {
        if (window.innerWidth < 776) {
            alert('此網站不支援手機瀏覽>"""<，請使用電腦開啟！');
            document.getElementById('noPhone2').href = 'index.php';
        }
    });
    document.getElementById('noPhone3').addEventListener('click', function() {
        if (window.innerWidth < 1200) {
            alert('此網站不支援手機及平板瀏覽>"""<，請使用電腦開啟！');
            document.getElementById('noPhone3').href = 'index.php';
        }
    });
 
    // 建立星星
    function createStar(starCount) {
      for (let i = 0; i < starCount; i++) {
        $('.container').append(`<div class="star animate">.</div>`)
      }

      $('.star').each(function (index, star) {
        $(this).css({
          position: 'absolute',
          left: gsap.utils.random(0, 100) + '%',
          top: gsap.utils.random(0, 100) + '%',
          color: 'yellow',
        })
      })
    }

    createStar(50)

    // 建立星星動畫
    gsap.to('.star', {
      'font-size': `random(12,50)`,
      filter: 'drop-shadow(0 0 30px rgba(255,255,0,1))',
      left: '+=random(-10, 10)%',
      x: 'random(-50,50)',
      y: 'random(-50,50)',
      rotationY: '-=180',
      scale: 'random(1,2)',
      duration: 'random(5, 10)',
      delay: 'random(0,5)',
      repeat: -1,
      repeatRefresh: true,
      ease: 'back',
      stagger: 0.1
    })


</script>