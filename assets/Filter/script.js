document.getElementById('checkboxes').addEventListener('click', showHide);

function showHide(e) {
    if (e.target.type !== "checkbox") {
        return;
    }

    var b = document.getElementById('popup');

    if (e.target.checked) {
        b.classList.add("show-" + e.target.value);
    } else {
        b.classList.remove("show-" + e.target.value);
    }
}


//lig to firkanter oven på hinanden, hvis det går galt
//CSS animation on display block?

/* https://stackoverflow.com/questions/32325932/in-vanilla-javascript-how-do-i-show-hide-spans-with-multiple-class-names 
 */
