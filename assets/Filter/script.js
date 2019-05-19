/*document.getElementsById("katFam").onclick = function () {
var x = document.getElementsByClassName("divFam");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}*/

function funcFam() {
  var x = document.getElementsByClassName("divFam");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

document.getElementsById("katMad").onclick = function () {
    document.getElementsByClassName("divMad").style.display = "block";
}

document.getElementsById("katIns").onclick = function () {
    document.getElementsByClassName("divIns").style.display = "block";
}

document.getElementsById("katGro").onclick = function () {
    document.getElementsByClassName("divGro").style.display = "block";
}
