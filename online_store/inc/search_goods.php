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
    .good-header h3,p {
   
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
</style>
<a href="#">
    <div id="top" class="top"><i class="fa-solid fa-angle-up"></i></div>
</a>
<section class="section-products" id="store">
    <div class="container goods">
        <div class="row justify-content-center text-center " id="storeBannerRow" style="margin-bottom:24px">
            <div class="col-md-8 col-lg-6">
                <div class="good-header" style="cursor:pointer" onclick="location.href='#onlineStore'">
                    <!-- <h2 id="onlineStore">—　<b>購物商城</b>　— -->

                    <!-- </h2> -->

                    <div class="banner" id="onlineStore">
                        <div class="item">
                            <h2 style="font-size:30px">—　<b>商品搜尋結果</b>　— </h2>
                        </div>
                        <!--   <div class="item">
                            <h2>—　<b>肉泥</b>　— </h2>
                        </div>
                        <div class="item">
                            <h2>—　<b>猫砂</b>　— </h2>
                        </div>
                        <div class="item">
                            <h2>—　<b>罐頭</b>　— </h2>
                        </div>
                        <div class="item">
                            <h2>—　<b>鮮食</b>　— </h2>
                        </div>
                        <div class="item">
                            <h2>—　<b>生食</b>　— </h2>
                        </div>
                        <div class="item">
                            <h2>—　<b>猫草</b>　— </h2>
                        </div>
                        <div class="item">
                            <h2>—　<b>逗猫棒</b>　— </h2> -->
                        <!-- </div>
                    </div>
                    <br> <br> -->
                        <!-- <div class="hidden-div" id="onlineStore"></div> -->
                        <!-- <h3>超熱銷～快手刀下單～ (=^-ω-^=)</h3> -->

                        <!-- <a href="#onlineStore"><button type="button" class="btn mt-2" id="shoppingBtn">SHOPPING NOW</button></a> -->
                        <!-- <br> -->
                    </div>

                </div>
            </div>
            <!-- <div class="hidden-div"  style="margin-top:7px"></div> -->


            <div class="row good-row mt-5">
                <div id="discountBanner" style="padding-top:18px;height:85.7px" onclick="location.href='#onlineStore'">
                    <p class="discount-p">"&nbsp;&nbsp;滿&nbsp;<span>5&nbsp;0&nbsp;0&nbsp;0</span>&nbsp;元，打&nbsp;<span>8</span>&nbsp;折&nbsp;&nbsp;"</p>
                </div>
                <!-- Single Product -->
                <?php

                if (isset($_GET['query'])) {
                    $query = $_GET['query'];

                    $goods = $Good->q("SELECT * FROM goods WHERE name LIKE '%" . $query . "%'");
                    if (empty($goods)) {
                        echo '<p style="font-size:25px;color:red">　<b>抱歉，沒有搜尋到指定的商品！</b> </p>';
                    } else {
                        foreach ($goods as $good) {

                ?>

                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product<?= $good['id']; ?>" class="single-product">

                                    <div class="part-1">
                                        <img class="img-rotate" src="./img/<?= $good['img']; ?>" width="80%">
                                        <br><br>
                                        <div><i class="fa-sharp fa-solid fa-boxes-stacked" style="font-size:smaller"><span style="font-size:smaller">&nbsp;&nbsp;&nbsp;<?= $good['remain']; ?></span></i></div>
                                        <?php

                                        if (!empty($good['discount'])) {
                                            echo '<span class="discount">' . $good["discount"] . '% off</span>';
                                        }
                                        if (($good['new']) > 0) {
                                            echo '<span class="new">new</span>';
                                        }
                                        if (isset($_SESSION['liked_products'])) {
                                            $isLiked = (in_array($good['id'], $_SESSION['liked_products'])) ? 'liked' : '';
                                        }

                                        ?>
                                        <ul>
                                            <li>
                                                <?php if ($good['remain'] > 0) { ?>

                                                    <a href="./api/add_good.php?id=<?= $good['id']; ?>">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>

                                                <?php
                                                } else {
                                                ?>
                                                    <a class="good-sold-out">
                                                        <i class="fas fa-shopping-cart" style="color: gray;"></i>
                                                    </a>
                                                <?php
                                                }
                                                ?>
                                            </li>
                                            <li><a style="cursor:pointer" class="like" id="<?= $good['id']; ?>" data-id="<?= $good['id']; ?>"><i class="fas fa-heart <?= $isLiked; ?>"></i></a></li>
                                            <li>
                                                <?php if ($good['remain'] > 0) { ?>
                                                    <a href="./api/add_good.php?id=<?= $good['id']; ?>&query=<?=$query;?>" class="plus-atag">
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                <?php
                                                } else {
                                                ?>
                                                    <a class="good-sold-out">
                                                        <i class="fas fa-plus" style="color: gray;"></i>
                                                    </a>
                                                <?php
                                                }
                                                ?>
                                            </li>

                                            <li><a style="cursor:pointer" class="goodImgExpand"><i class="fas fa-expand" data-img="<?= $good['img']; ?>"></i></a></li>
                                        </ul>

                                    </div>
                                    <div class="part-2">
                                        <h3 class="product-title" style="font-weight:bold"><?= $good['name']; ?></h3>

                                        <?php
                                        if (($good['old_price']) != ($good['price'])) {
                                            echo '<span class="product-old-price">NTD  ' . $good["old_price"] . '</span>';
                                        }
                                        ?>

                                        <h4 class="product-price">NTD <?= $good['price']; ?></h4>
                                        <div><i class="fa-sharp fa-solid fa-boxes-stacked" style="font-size:smaller"><span style="font-size:smaller">&nbsp;&nbsp;&nbsp;<?= $good['remain']; ?></span></i></div>
                                    </div>
                                </div>
                            </div>

                <?php

                        }
                    }
                } ?>
                <!-- Single Product -->
                <!-- <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-7" class="single-product">
                    <div class="part-1">
                        <ul>
                             <li><a href="./cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="./api/add_good.php?id=7"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">CIAO｜猫咪肉泥 訓練獎勵好幫手</h3>

                        <h4 class="product-price">NTD 55</h4>
                    </div>
                </div>
            </div> -->
                <!-- Single Product -->
                <!-- <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-8" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                             <li><a href="./cart.php"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fas fa-heart"></i></a></li>
                            <li><a href="./api/add_good.php?id=8"><i class="fas fa-plus"></i></a></li>
                            <li><a href="#"><i class="fas fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">放輕鬆｜舒芙巾</h3>
                        <h4 class="product-price">NTD 29</h4>
                    </div>
                </div>

            </div> -->
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



        $(".good-sold-out").click(function() {

            alert('商品賣完囉！拍謝～我們會盡快補貨～💛💛💛')
        })

        //         $(".fa-heart").click(function() {
        //     location.reload();
        // });

        $(".like").click(function(event) {
            let productId = $(this).data("id");

            $.post("./api/add_like.php", {
                'id': productId
            }, (res) => {
                console.log(res);

                $("#" + productId).load(location.href + " #" + productId + " > *");
                //   location.reload();
            });
        });
    });

    $(document).ready(function() {

        $('.goodImgExpand').click(function() {
            let imgName = $(this).find("i").data("img");
            console.log('ok');
            $("#imgModalSrc").attr("src", "./img/" + imgName);
            $('#good').modal('show');
        });


    });

    $("#shoppingBtn").click(function() {

        $("#shoppingBtn").hide()
    })

    // 如果包含 'store' 參數，隱藏 #shoppingBtn


    // $("#discountBanner").click(function() {
    //     $(".good-row").css('border', '10px solid #d8a25a');
    //     $("#discountBanner").css('border', '10px solid #d8a25a');
    //     $("#discountBanner").css('background-color', '#d8a25a');
    //     $("#discountBanner").css('color', '#fff');

    // });
    if (window.innerWidth > 450) {
        let part2 = $(".part-2")
        part2.find(".fa-sharp").addClass('disabled');
    }
    if (window.innerWidth < 450) {

        if (window.location.hash.includes('store')) {
            $("#shoppingBtn").hide();
            $(".discount-p").removeClass('discount-p');
            $(".good-row").css('border', '10px solid #d8a25a');
            $("#discountBanner").css('border', '10px solid #d8a25a');
            $("#discountBanner").css('background-color', '#d8a25a');
            $("#discountBanner").css('color', '#fff');
            $(".good-row").css('margin-top', '4.5px');
        }
    };
    var scrollThreshold = 610;
    var scrolltoTop = 100;
    var scrolltoDiscountBar = 400;
    $(window).scroll(function() {

        var scrollPosition = $(this).scrollTop();
        var documentHeight = $(document).height();
        var windowHeight = $(this).height();

        if (scrollPosition < scrolltoTop) {
            var scrollPosition = $(this).scrollTop();
            $("#top").css('opacity', '0')

        } else {
            $("#top").css('opacity', '1')
        }

        if (scrollPosition < scrolltoDiscountBar) {
            $("#top").css('opacity', '0')

        };

        if (window.innerWidth < 450) {
            var scrollPosition = $(this).scrollTop();
            var documentHeight = $(document).height();
            var windowHeight = $(this).height();

            if (scrollPosition > scrollThreshold) {
                $(".good-row").css('border', '10px solid #d8a25a ');
                $("#discountBanner").css('background-color', '#d8a25a ');


            } else {
                $(".good-row").css('border', '10px solid rgb(148, 86, 6) ');
                $("#discountBanner").css('border', '1px solid rgb(252, 233, 122) ');
                $("#discountBanner").css('background-color', 'rgb(148, 86, 6) ');
                $("#discountBanner").css('color', 'rgb(252, 233, 122) ');
                $(".good-row").css('margin-top', '4.5px');
            }

            if (scrollPosition < scrolltoTop) {
                $(".good-row").css('border', '10px solid rgb(73, 42, 2) ');
                $("#discountBanner").css('border', '1px solid d rgb(252, 233, 122) ');
                $("#discountBanner").css('background-color', 'rgb(73, 42, 2) ');
                $("#discountBanner").css('color', 'rgb(252, 233, 122) ');
                $("#discountBanner").css('padding-top', '18px');
                $("#storeBannerRow").css('margin-bottom', '14px');
                $("#top").css('opacity', '0')
                $("#top").css('margin-top', '50px')
            } else {
                $("#top").css('opacity', '1')
            }

            if (scrollPosition < scrolltoDiscountBar) {
                $("#top").css('opacity', '0')
                $("#top").css('margin-top', '50px')
            };
        }
    });
    $(document).ready(function() {

        var windowWidth = $(window).width();

        if (windowWidth < 450) {

            $('.plus-atag').attr('href', './api/add_good.php?id=<?= $good['id']; ?>&mobile');
        }

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