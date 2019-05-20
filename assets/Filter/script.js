document.getElementsByClassName("divFam").onclick = function() {funcFam()};

function funcFam() {
    var x = document.getElementsByClassName("divFam");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

document.getElementsByClassName("divMad").onclick = function() {funcMad()};

function funcMad() {
    var x = document.getElementsByClassName("divMad");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

document.getElementsByClassName("divIns").onclick = function() {funcIns()};

function funcIns() {
    var x = document.getElementsByClassName("divIns");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

document.getElementsByClassName("divGro").onclick = function() {funcGro()};

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
