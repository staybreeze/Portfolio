<style>
#mouseSquareBig {
      width: 15px;
      height: 15px;
      background-color: goldenrod;
      position: fixed;
      transition-duration: 0.1s;
      z-index: 999;
    }
#mouseSquareMidium {
      width: 12px;
      height: 12px;
      background-color: gold;
      position: fixed;
      transition-duration: 0.15s;
      z-index: 998;
    }

    #mouseSquareSmall {
      width: 8px;
      height: 8px;
      background-color: rgb(253, 211, 104);
      position: fixed;
      transition-duration: 0.2s;
      z-index: 998;
    }
</style>
<div id="mouseSquareBig"></div>
<div id="mouseSquareMidium"></div>
<div id="mouseSquareSmall"></div>
<script>
      let cursor = document.getElementById("mouseSquareBig");
  let mouseSquareMidium = document.getElementById("mouseSquareMidium");
  let mouseSquareSmall = document.getElementById("mouseSquareSmall")
  function updateCursor(e) {
    let x = e.clientX;
    let y = e.clientY;
    cursor.style.left = x + 17 + "px";
    cursor.style.top = y + 17 + "px";
    mouseSquareMidium.style.left = x + 17 + "px";
    mouseSquareMidium.style.top = y + 17 + "px";
    mouseSquareSmall.style.left = x + 17 + "px";
    mouseSquareSmall.style.top = y + 17 + "px";
  }

  window.addEventListener("mousemove", function(e) {
    requestAnimationFrame(() => updateCursor(e));
  });

</script>