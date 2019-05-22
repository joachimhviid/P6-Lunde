const squareTree = document.getElementById('square');
const circleTree = document.getElementById('circle');
const coneTree = document.getElementById('cone');
const signPost = document.getElementById('sign');

var animItems = [squareTree, circleTree, coneTree, signPost];

var itemInterval;
var slowAnimation;
var frameRate = 18;
var isPlaying = false;
var skew = 0;

function breeze() {
  slowAnimation = setTimeout(function() {

    if (skew >= -15) {
      for(var i = 0; i <= 5; i++) {
        skew--;
        animItems[0].style.transform = "skewX("+skew+"deg)";
        console.log(skew);
      }
      itemInterval = window.requestAnimationFrame(breeze);
    } else if (skew <= -15){
      skew++;
      animItems[0].style.transform = "skewX("+skew+"deg)";
      console.log(skew);
      itemInterval = window.requestAnimationFrame(breeze);
    }
  }, 1000 / frameRate);
}

function mouseClicked() {
  if(isPlaying) {
    isPlaying = false;
    clearTimeout(slowAnimation);
    cancelAnimationFrame(itemInterval);
    animItems[0].style.transform = "skewX(0deg)";
  } else {
    isPlaying = true;
    itemInterval = window.requestAnimationFrame(breeze);
  }
}

animItems[0].addEventListener("click", mouseClicked);
