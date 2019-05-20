const squareTree = document.getElementById('square');
const circleTree = document.getElementById('circle');
const coneTree = document.getElementById('cone');
const maxSpace = 500;

var squareLoc = square.getBoundingClientRect();
var circleLoc = circle.getBoundingClientRect();
var coneLoc = cone.getBoundingClientRect();

// Sets initial margins
var squareMargin = (Math.random() * maxSpace) + 'px';
var circleMargin = (Math.random() * maxSpace) + 'px';
var coneMargin = (Math.random() * maxSpace) + 'px';
squareTree.style.marginRight = squareMargin;
circleTree.style.marginRight = circleMargin;
coneTree.style.marginRight = coneMargin;

// Calculates future margins
var animInterval = setInterval(randomSpacing, 8000);
// var itemLoc = setInterval(getLocation, 7999);

document.addEventListener('DOMContentLoaded', treeAnim());

function randomSpacing() {
  squareTree.style.marginRight = (Math.random() * maxSpace) + 'px';
  circleTree.style.marginRight = (Math.random() * maxSpace) + 'px';
  coneTree.style.marginRight = (Math.random() * maxSpace) + 'px';
}

function getLocation() {
  var squareLoc = square.getBoundingClientRect();
  var circleLoc = circle.getBoundingClientRect();
  var coneLoc = cone.getBoundingClientRect();

  console.log("Square margin and loc: " + squareTree.style.marginRight + " | " + squareLoc.left + " | " + squareLoc.right);
  console.log("Circle margin and loc: " + circleTree.style.marginRight + " | " + circleLoc.left + " | " + circleLoc.right);
  console.log("Cone margin and loc: " + coneTree.style.marginRight + " | " + coneLoc.left + " | " + coneLoc.right);
}

function treeAnim() {
  var treePos = window.innerWidth;
  var animLoop = setInterval(frame, 5);
  function frame() {
    if (treePos < 0-(squareLoc.right-squareLoc.left)) {
      clearInterval(animLoop)
    } else {
      treePos--;
      squareTree.style.left = treePos + 'px';
    }
  }
}
