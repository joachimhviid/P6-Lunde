const squareTree = document.getElementById('square');
const circleTree = document.getElementById('circle');
const coneTree = document.getElementById('cone');
const maxSpace = 500;

var animInterval = setInterval(randomSpacing, 8000);

function randomSpacing() {
  squareTree.style.marginRight = (Math.random() * maxSpace) + 'px';
}
