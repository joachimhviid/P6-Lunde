const squareTree = document.getElementById('square');
const circleTree = document.getElementById('circle');
const coneTree = document.getElementById('cone');
const maxSpace = 500;

// Sets initial margins
squareTree.style.marginRight = (Math.random() * maxSpace) + 'px';
circleTree.style.marginRight = (Math.random() * maxSpace) + 'px';
coneTree.style.marginRight = (Math.random() * maxSpace) + 'px';

// Calculates future margins
var animInterval = setInterval(randomSpacing, 8000);

function randomSpacing() {
  squareTree.style.marginRight = (Math.random() * maxSpace) + 'px';
  circleTree.style.marginRight = (Math.random() * maxSpace) + 'px';
  coneTree.style.marginRight = (Math.random() * maxSpace) + 'px';
}
