function checker(e) {
    var ref, dir, itemset;

    if (e.target.type === 'checkbox') {
        dir = e.target.checked ? 1 : -1;

        itemset = document.getElementsByClassName(e.target.value);

        Array.prototype.forEach.call(itemset, function (el) {
            ref = dir + parseInt(el.getAttribute('data-ref'), 10);
            el.setAttribute('data-ref', ref);
            el.style.display = ref > 0 ? 'block' : 'none';
        });
    }
}

document
    .getElementById('checks')
    .addEventListener('click', checker);


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
