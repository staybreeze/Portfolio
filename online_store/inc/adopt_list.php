<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap');

    .liked {
        color: #fe302f
    }

    #shoppingBtn,
    #discountBanner {
        display: none;
    }


    @media screen and (max-width: 450px) {

        #shoppingBtn,
        #discountBanner {
            display: block;

        }

        .img-rotate {
            width: 75%;
            margin-top: 20px;
            margin-left: 50px
        }

    }

    .disabled {
        display: none;
    }

    .banner {

        position: relative;
        font-family: 'Orbitron', sans-serif;
    }

    .item {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* opacity: 0; */
    }

    .item h2,
    .good-header h3,
    p {

        font-family: 'Zen Maru Gothic', serif;
    }

    .top {
        position: fixed;
        width: 30px;
        height: 30px;
        padding-top: 1px;
        text-align: center;
        align-items: center;
        right: 20px;
        bottom: 200px;
        background-color: rgb(216, 162, 90);
        color: #fff;
        /* font-weight: bold; */
        font-size: 20px;
        font-family: Rubik scribble;
        /* border-bottom: 1px solid#00707f;   */
        z-index: 99;
        opacity: 0;
        transition: opacity 0.5s;
    }

    #checkOutBtn {
        z-index: 999;
    }

    .product-price {
        color: rgb(107, 62, 2);
        font-weight: bold;
    }

    .product-title {
        background-color: rgb(107, 62, 2);
        color: #fff;
        width: 80%;
        margin-left: 30px;
        padding-top: 6px;
        height: 30px
    }

    .img-rotate {
        border-radius: 10px 10px 0 0;

    }

    .img-rotate:hover {
        transform: scale(1.25, 1.25) rotate(-5deg);
        transition: all 0.3s;
    }
</style>
<a href="#">
    <div id="top" class="top"><i class="fa-solid fa-angle-up"></i></div>
</a>
<section class="section-products" id="store">
    <div class="container goods">
        <div class="row justify-content-center text-center " id="storeBannerRow" style="margin-bottom:24px">
            <div class="col-md-8 col-lg-6">
                <div class="good-header" style="cursor:pointer" onclick="location.href='#onlineStore'">
                    <div class="banner" id="onlineStore">
                        <div class="item">
                            <h2 style="font-size:30px">—　<b>貓咪領養</b>　— </h2>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row" style="width:100%">
                <div class="col-3 pt-1">
                    <p class="bold mt-3" style="font-size:20px;font-weight:bold">縣市所在地 __<span style="color:crimson">
                            <em><?php
                                if (isset($_GET['location'])) {
                                    switch ($_GET['location']) {
                                        case '2':
                                            echo ' 臺北市</em></span> __ ';
                                            break;
                                        case '3':
                                            echo ' 新北市</em></span> __ ';
                                            break;
                                        case '4':
                                            echo ' 基隆市</em></span> __ ';
                                            break;
                                        case '5':
                                            echo ' 宜蘭縣</em></span> __ ';
                                            break;
                                        case '6':
                                            echo ' 桃園縣</em></span> __ ';
                                            break;
                                        case '7':
                                            echo ' 新竹縣</em></span> __ ';
                                            break;
                                        case '8':
                                            echo ' 新竹市</em></span> __ ';
                                            break;
                                        case '9':
                                            echo ' 苗栗縣</em></span> __ ';
                                            break;
                                        case '10':
                                            echo ' 臺中市</em></span> __ ';
                                            break;
                                        case '11':
                                            echo ' 彰化縣</em></span> __ ';
                                            break;
                                        case '12':
                                            echo ' 南投縣</em></span> __ ';
                                            break;
                                        case '13':
                                            echo ' 雲林縣</em></span> __ ';
                                            break;
                                        case '14':
                                            echo ' 嘉義縣</em></span> __ ';
                                            break;
                                        case '15':
                                            echo ' 嘉義市</em></span> __ ';
                                            break;
                                        case '16':
                                            echo ' 臺南市</em></span> __ ';
                                            break;
                                        case '17':
                                            echo ' 高雄市</em></span> __ ';
                                            break;
                                        case '18':
                                            echo ' 屏東縣</em></span> __ ';
                                            break;
                                        case '19':
                                            echo ' 花蓮縣</em></span> __ ';
                                            break;
                                        case '20':
                                            echo ' 臺東縣</em></span> __ ';
                                            break;

                                        case '21':
                                            echo ' 澎湖縣</em></span> __ ';
                                            break;
                                        case '22':
                                            echo ' 金門縣</em></span> __ ';
                                            break;
                                        case '23':
                                            echo ' 連江縣</em></span> __ ';
                                            break;
                                    }
                                }
                                ?></p>
                </div>
               
                <div class=" col-3">
                    <select class="form-select mt-3 mb-3" id="selector">
                        <option value="">請選擇</option>
                        <option value="2">臺北市</option>
                        <option value="3">新北市</option>
                        <option value="4">基隆市</option>
                        <option value="5">宜蘭縣</option>
                        <option value="6">桃園縣</option>
                        <option value="7">新竹縣</option>
                        <option value="8">新竹市</option>
                        <option value="9">苗栗縣</option>
                        <option value="10">臺中市</option>
                        <option value="11">彰化縣</option>
                        <option value="12">南投縣</option>
                        <option value="13">雲林縣</option>
                        <option value="14">嘉義縣</option>
                        <option value="15">嘉義市</option>
                        <option value="16">臺南市</option>
                        <option value="17">高雄市</option>
                        <option value="18">屏東縣</option>
                        <option value="19">花蓮縣</option>
                        <option value="20">臺東縣</option>
                        <option value="21">澎湖縣</option>
                        <option value="22">金門縣</option>
                        <option value="23">連江縣</option>
                    </select>
                </div>

            </div>
            <div class="row good-row">

                <!-- Single Product -->
                <?php

                $location = isset($_GET['location']) ? $_GET['location'] : '';


                $url = 'https://data.moa.gov.tw/Service/OpenData/TransService.aspx?UnitId=QcbUEzN6E6DL';


                $data = file_get_contents($url);


                $decodedData = json_decode($data, true);


                if ($decodedData !== null) {

                    foreach ($decodedData as $item) {
                        if ($item['animal_kind'] === '貓' && $item['animal_area_pkid'] == $location && $item['animal_area_pkid'] > 1) {
                ?>

                            <div class="col-md-6 col-lg-4 col-xl-3 mt-5">
                                <div class="single-product">

                                    <div class="part-1">
                                        <img class="img-rotate" src="<?= $item['album_file']; ?>" width="80%" height="70%">
                                        <!-- <br><br>
                                        <div></div>

                                        <ul>
                                            <li>

                                            </li>
                                            <li></li>
                                            <li>

                                            </li>

                                            <li></li>
                                        </ul> -->

                                    </div>
                                    <div class="part-2" style="margin-top:-107px">
                                        <h3 class="product-title" style="font-weight:bolder;"><?= $item['animal_Variety']; ?></h3>
                                        <br>
                                        <h4 class="product-price">
                                            <?php echo $item['animal_sex'] === 'M' ? '男生' : '女生'; ?>
                                        </h4><br>
                                        <h4 class="product-price">
                                            <?= $item['animal_place']; ?>
                                        </h4><br>
                                        <h4 class="product-price">
                                            電話：<?= $item['shelter_tel']; ?>
                                        </h4><br>
                                        <h4 class="product-price">
                                            收容日期：<?= $item['animal_createtime']; ?>
                                        </h4><br>
                                        <h4 class="product-price">
                                            收容編號：<?= $item['animal_subid']; ?>
                                        </h4>

                                        <div></div>
                                    </div>
                                </div>
                            </div>

                <?php

                        }
                    }
                }
                ?>
            </div>
        </div>



        <!-- good Modal -->
        <div class="modal fade poster-modal" id="good">
            <div class="modal-dialog">



                <!-- Modal body -->


                <img id="imgModalSrc" width="100%" alt="">


                <!-- Modal footer -->

                <button type="button" class="btn  close-btn mt-2" id="close-btn" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
        <a href="cart.php"><button type="button" class="btn  close-btn mt-2" id="checkOutBtn"><em>CHECK OUT</em></button></a>
</section>

<script>
    $(document).ready(function() {

        $('#top').on('click', function() {
            if (window.innerWidth > 450) {
                $(this).css('background', '#12304a');
            }
            setTimeout(function() {
                $('#top').css('background', 'rgb(216, 162, 90)');
            }, 800);
        });
    });
    $(document).ready(function() {
        $('.myBtn').on('click', function() {

            $(this).parent().siblings().find('.myBtn').css('background-color', 'rgb(107, 62, 2)');


            $(this).css('background-color', 'rgb(216, 162, 90)');
        });
    });


    $('#selector').on('change', function() {
        let location = $('#selector').val();
        window.location.href = 'adopt.php?location=' + location;
    });
</script>
<!-- 引入 gsap 主程式 -->
<script src="./gsap/gsap.js"></script>
<!-- 
<script>
    gsap.set('.item', {
        y: 0,
        rotationX: 0,
        autoAlpha: 1
    });

    // set 是設定初始補間動畫的預設值
    gsap.set('.banner', {
        perspective: 1000
    })

    const tl = gsap.timeline({
        repeat: -1,
        repeatDelay: 2,
    })

    tl
        .from('.item', {
            y: 60,
            rotationX: -90,
            autoAlpha: 0,
            stagger: 4
        })
        .to('.item', {
            y: -60,
            rotationX: 90,
            autoAlpha: 0,
            stagger: 4
        }, 4) // 第三參數指設定動畫在時間軸的位置，2.5 是絕對數值，直接將動畫放在時間軸 2.5 秒的位置

</script> -->