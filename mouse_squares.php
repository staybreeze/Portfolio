<style>
  @media screen and (max-width: 776px) {

    #mouseSquareBig,
    #mouseSquareMidium,
    #mouseSquareSmall {
      display: none;
    }
  }

  #mouseSquareBig {
    width: 20px;
    height: 20px;
    background-color: rgb(253, 211, 104);
    position: fixed;
    transition-duration: 0.1s;
    z-index: 999;
    opacity: 0;
  }

  #mouseSquareMidium {
    width: 18px;
    height: 18px;
    background-color:rgb(253, 211, 104);
    position: fixed;
    transition-duration: 0.14s;
    z-index: 998;
    opacity: 0;
  }

  #mouseSquareSmall {
    width: 16px;
    height: 16px;
    background-color: rgb(253, 211, 104);
    position: fixed;
    transition-duration: 0.18s;
    z-index: 998;
    opacity: 0;
  }
  #mouseSquareSmaller {
    width: 14px;
    height: 14px;
    background-color: rgb(253, 211, 104);
    position: fixed;
    transition-duration: 0.22s;
    z-index: 998;
    opacity: 0;
  }
  #mouseSquareSmallest {
    width: 12px;
    height: 12px;
    /* background-color: rgb(253, 211, 104); */
    position: fixed;
    transition-duration: 0.26s;
    z-index: 998;
    opacity: 0;
  }
</style>
<div id="mouseSquareBig" class="mouse-square"></div>
<div id="mouseSquareMidium" class="mouse-square"></div>
<div id="mouseSquareSmall" class="mouse-square"></div>
<div id="mouseSquareSmaller" class="mouse-square"></div>
<div id="mouseSquareSmallest" class="mouse-square"></div>
<script>
   let mouseSquare = document.getElementsByClassName("mouse-square");
  let mouseSquareBig = document.getElementById("mouseSquareBig");
  let mouseSquareMidium = document.getElementById("mouseSquareMidium");
  let mouseSquareSmall = document.getElementById("mouseSquareSmall")
  let mouseSquareSmaller = document.getElementById("mouseSquareSmaller")
  let mouseSquareSmallest = document.getElementById("mouseSquareSmallest")

  function updateCursor(e) {
    let x = e.clientX;
    let y = e.clientY;
    
    mouseSquareBig.style.left = x + 15 + "px";
    mouseSquareBig.style.top = y + 24 + "px";
    // mouseSquareBig.style.opacity=1;
    mouseSquareMidium.style.left = x + 15 + "px";
    mouseSquareMidium.style.top = y + 24 + "px";
    // mouseSquareMidium.style.opacity=1;
    mouseSquareSmall.style.left = x + 15 + "px";
    mouseSquareSmall.style.top = y + 24 + "px";
    // mouseSquareSmall.style.opacity=1;
    mouseSquareSmaller.style.left = x + 15 + "px";
    mouseSquareSmaller.style.top = y + 24 + "px";
    // mouseSquareSmaller.style.opacity=1;
    mouseSquareSmallest.style.left = x + 15 + "px";
    mouseSquareSmallest.style.top = y + 24 + "px";
    // mouseSquareSmallest.style.opacity=1;
    
  }

  window.addEventListener("mousemove", function(e) {
    requestAnimationFrame(() => updateCursor(e));

  });

  document.addEventListener("mousemove", function(event) {
  // 獲取滑鼠當前坐標
  let x = event.clientX;
  let y = event.clientY;

  // 使用 document.elementFromPoint 獲取該坐標下的元素
  let elementUnderMouse = document.elementFromPoint(x, y);

  // 檢查是否有元素
  // if (elementUnderMouse.classList.contains("img-rotate")) {
    if(elementUnderMouse && elementUnderMouse.tagName === "IMG"|| elementUnderMouse.tagName === "A"|| elementUnderMouse.tagName === "TD"|| elementUnderMouse.tagName === "H3"||elementUnderMouse.parentElement.tagName === "TD"||elementUnderMouse.parentElement.tagName === "DIV"){
    mouseSquareBig.style.opacity=0.2;
    mouseSquareBig.style.backgroundColor='yellow';
    mouseSquareMidium.style.opacity=0.2;
    mouseSquareSmall.style.opacity=0.2;
    mouseSquareBig.style.backgroundColor='yellow';
    mouseSquareMidium.style.backgroundColor='yellow';
    mouseSquareSmall.style.backgroundColor='yellow';
    mouseSquareSmaller.style.backgroundColor='yellow';
    mouseSquareSmaller.style.opacity=0.2;
    mouseSquareSmallest.style.backgroundColor='yellow';
    mouseSquareSmallest.style.opacity=0.2;

    // console.log("有東西在滑鼠下面:", elementUnderMouse);
  } else {
    mouseSquareBig.style.opacity=1;
    mouseSquareMidium.style.opacity=1;
    mouseSquareSmall.style.opacity=1;
    mouseSquareSmaller.style.opacity=1;
    mouseSquareSmallest.style.opacity=1;
    mouseSquareBig.style.backgroundColor='#b5d2d6';
    mouseSquareMidium.style.backgroundColor='#b5d2d6';
    mouseSquareSmall.style.backgroundColor='#b5d2d6';
    mouseSquareSmaller.style.backgroundColor='#b5d2d6';
    mouseSquareSmallest.style.backgroundColor='#b5d2d6';
    
  }
  
});
</script>