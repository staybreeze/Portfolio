<style>
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
</style>
<section class="section-products" id="store">
    <div class="container goods">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="good-header" style="cursor:pointer" onclick="location.href='#onlineStore'">
                    <h2 id="onlineStore"><b>購物商城</b>

                    </h2>
                    <br>
                    <!-- <div class="hidden-div" id="onlineStore"></div> -->
                    <h3>超熱銷～快手刀下單唷 (=^-ω-^=)</h3>
                    <!-- <a href="#onlineStore"><button type="button" class="btn mt-2" id="shoppingBtn">SHOPPING NOW</button></a> -->
                    <!-- <br> -->
                </div>

            </div>
        </div>
        <!-- <div class="hidden-div"  style="margin-top:7px"></div> -->


        <div class="row good-row">
            <div id="discountBanner" style="padding-top:15px;height:80px" onclick="location.href='#onlineStore'">
                <p class="discount-p">"&nbsp;&nbsp;滿&nbsp;<span>5&nbsp;0&nbsp;0&nbsp;0</span>&nbsp;元，打&nbsp;<span>8</span>&nbsp;折&nbsp;&nbsp;"</p>
            </div>
            <!-- Single Product -->
            <?php

            $goods = $Good->all();

            foreach ($goods as $good) {

            ?>

                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product " class="single-product">

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
                                        <a href="./api/add_good.php?id=<?= $good['id']; ?>" class="plus-atag">
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
                        <h3 class="product-title">CIAO｜貓咪肉泥 訓練獎勵好幫手</h3>

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


    $(window).scroll(function() {
        if (window.innerWidth < 450) {
            var scrollPosition = $(this).scrollTop();


            if (scrollPosition > scrollThreshold) {
                $(".good-row").css('border', '10px solid #d8a25a ');
                $("#discountBanner").css('border', '1px solid #fff ');
                $("#discountBanner").css('background-color', '#d8a25a ');
                $("#discountBanner").css('color', '#fff ');

            } else {
                $(".good-row").css('border', '10px solid rgb(107, 62, 2) ');
                $("#discountBanner").css('border', '1px solid rgb(252, 233, 122) ');
                $("#discountBanner").css('background-color', 'rgb(107, 62, 2) ');
                $("#discountBanner").css('color', 'rgb(252, 233, 122) ');
                $(".good-row").css('margin-top', '4.5px');
            }
        };
    });
    $(document).ready(function() {

        var windowWidth = $(window).width();

        if (windowWidth < 450) {

            $('.plus-atag').attr('href', './api/add_good.php?id=<?= $good['id']; ?>&mobile');
        }

    });
</script>