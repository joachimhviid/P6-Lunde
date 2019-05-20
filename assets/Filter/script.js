document.getElementById('checkboxes').addEventListener('click', showHide);

function showHide(e) {
    if (e.target.type !== "checkbox") {
        return;
    }

    var b = document.getElementById('books');

    if (e.target.checked) {
        b.classList.add("show-" + e.target.value);
    } else {
        b.classList.remove("show-" + e.target.value);
    }
}

/*document.getElementById("butFam").onclick = function() {funcFam()};

function toggle(x) {
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}*/

//true og false på to variabler
//check hele documentet hver gang man trykker på en knap

//lig to firkanter oven på hinanden, hvis det går galt
//CSS animation on display block?
