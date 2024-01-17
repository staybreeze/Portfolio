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
</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    let header = $('#header');
    let scrollThreshold = 0;

    header.removeClass('hide-header').addClass('show-header');
    header.css('background-color', 'rgb(216, 162, 90)');

    $(window).scroll(function() {
      var scrollPosition = $(this).scrollTop();

      if (scrollPosition > scrollThreshold) {
        header.removeClass('hide-header').addClass('show-header');
      } else {
        // header.removeClass('show-header').addClass('hide-header');
      }
    });
  });
</script>