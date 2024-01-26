<style>
  #header {
    opacity: 1;
    overflow: hidden;
    transition: opacity 1s, height 1s;
  }

  #header.hide-header {
    opacity: 0;
    height: 0;
    overflow: hidden;
    pointer-events: none;
  }

  /* #headerMobile {
    opacity: 1;
    max-height: 500px;
    overflow: hidden;
    transition: opacity 1.5s, max-height 1.5s;
  }
  #headerMobile.hide-header {
    opacity: 0;
    max-height: 0;
  } */
</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    let header = $('#header');
    let headerMobile = $('#headerMobile');
    let scrollThreshold = 0;

    header.removeClass('hide-header')

    // if (window.innerWidth < 450) {
    // headerMobile.removeClass('hide-header');
    // }
  });
  $(document).ready(function() {
    var scrollThreshold = 610;
    var scrolltoTop = 100;

    if (window.innerWidth > 450) {
      $(window).scroll(function() {
        var scrollPosition = $(this).scrollTop();

        if (scrollPosition > scrolltoTop) {
          $("#header").css('height', '11vh');
          $("#logo").css('width', '73%');
          $("#title").css({
            'margin-top': '-5px',
            'font-size': '28px'
          });
          $("#header-pages").css('margin-top', '-8px');
          $(".hidden-icon").css({'margin-top': '1px','font-size': '1.6em'});
          $(".hidden-words").css('font-size', 'small');
          $(".search-icon").css('margin-top', '15px');
        } else {
          $("#header").css('height', '12.5vh');
          $("#logo").css('width', '85%');
          $("#title").css({'margin-top': '0px','font-size':'2rem'});
          $("#header-pages").css('margin-top', '0px');
          $(".hidden-icon").css({'margin-top': '0px','font-size': '2em'});
          $(".hidden-words").css('font-size', 'smaller');
          $(".search-icon").css('margin-top', '20px');
        }
      });
    }
  });
</script>