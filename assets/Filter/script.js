document.getElementById('checkboxes').addEventListener('click', showHide);

function showHide(e) {
    if (e.target.type !== "checkbox") {
        return;
    }

    var p = document.getElementById('popup');

    if (e.target.checked) {
        p.classList.add("show-" + e.target.value);
    } else {
        p.classList.remove("show-" + e.target.value);
    }
}


/* https://stackoverflow.com/questions/32325932/in-vanilla-javascript-how-do-i-show-hide-spans-with-multiple-class-names 
 */
