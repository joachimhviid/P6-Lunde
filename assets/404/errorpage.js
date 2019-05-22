const squareTree = document.getElementById('square');
const circleTree = document.getElementById('circle');
const coneTree = document.getElementById('cone');
const signPost = document.getElementById('sign');

var animItems = [squareTree, circleTree, coneTree, signPost];

var itemInterval;
var isPlaying = false;
var skew = 0;

function breeze() {
  if (skew <= -20) {
      skew++;
      animItems[0].style.transform = "skewX("+skew+"deg)";
      console.log(skew);
      itemInterval = window.requestAnimationFrame(breeze);
    } else {
      skew--;
      animItems[0].style.transform = "skewX("+skew+"deg)";
      console.log(skew);
      itemInterval = window.requestAnimationFrame(breeze);
    }
}

function mouseClicked() {
  if(isPlaying) {
    isPlaying = false;
    cancelAnimationFrame(itemInterval);
    animItems[0].style.transform = "skewX(0deg)";
  } else {
    isPlaying = true;
    itemInterval = window.requestAnimationFrame(breeze);
  }
}

animItems[0].addEventListener("click", mouseClicked);
