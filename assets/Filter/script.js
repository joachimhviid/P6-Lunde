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

function funcMad() {
    var x = document.getElementsByClassName("divMad");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function funcIns() {
    var x = document.getElementsByClassName("divIns");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function funcGro() {
    var x = document.getElementsByClassName("divGro");
    var i;
    for (i = 0; i < x.length; i++) {
        if (x[i].style.display === "none") {
            x[i].style.display = "block";
        } else {
            x[i].style.display = "none";
        }
    }
            