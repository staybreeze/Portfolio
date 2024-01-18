<style>
  #header {

    opacity: 1;

    overflow: hidden;
    transition: opacity 1s, height 1s;
  }

  #headerMobile.hide-header {
    opacity: 0;
    overflow: hidden;
    pointer-events: none;
  }

  #headerMobile {
    opacity: 1;
    max-height: 500px;
    overflow: hidden;
    transition: opacity 1.5s, max-height 1.5s;
  }
  #headerMobile.hide-header {
    opacity: 0;
    max-height: 0;
  }
</style>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    let header = $('#header');
    let headerMobile = $('#headerMobile');
    let scrollThreshold = 0;

    header.removeClass('hide-header')

    if (window.innerWidth < 450) {
    headerMobile.removeClass('hide-header');
    }
  });
</script>