
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

