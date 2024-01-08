<section class="section-products" id="store">
    <div class="container goods">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    <h2><b>特色商品</b>

                    </h2>
                    <br>
                    <h3>超熱銷(=^-ω-^=)</h3>

                    <br>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Single Product -->
            <?php
            $goods = $Good->all();
            foreach ($goods as $good) {   ?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="product" class="single-product">

                        <div class="part-1">
                            <img class="img-rotate" src="./img/<?= $good['img']; ?>" alt="" width="100%">
                            <?php

                            if (!empty($good['discount'])) {
                                echo '<span class="discount">' . $good["discount"] . '% off</span>';
                            }
                            if (($good['new']) > 0) {
                                echo '<span class="new">new</span>';
                            }

                            ?>


                            <ul>
                                <li><a href="./api/add_good.php?id=<?= $good['id']; ?>&cart"><i class="fas fa-shopping-cart"></i></a></li>
                                <li><a href="#store" class="like"  data-id="<?= $good['id']; ?>"><i class="fas fa-heart"></i></a></li>
                                <li><a href="./api/add_good.php?id=<?= $good['id']; ?>"><i class="fas fa-plus"></i></a></li>
                                <li><a href="#"><i class="fas fa-expand"></i></a></li>
                               
                            </ul>
                        </div>
                        <div class="part-2">
                            <h3 class="product-title"><?= $good['name']; ?></h3>

                            <?php
                            if (($good['old_price']) != ($good['price'])) {
                                echo '<span class="product-old-price">NTD  ' . $good["old_price"] . '</span>';
                            }
                            ?>

                            <h4 class="product-price">NTD <?= $good['price']; ?></h4>
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
</section>

<script>
$(document).ready(function() {
    $(".like").click(function(event) {
        $(this).css("color", "#fe302f");
        console.log('this', this);

        let productId = $(this).data("id")

        $.post("./api/add_like.php", {
            'id': productId
        }, (res) => {
            console.log(res);
        });
    });
});


</script>