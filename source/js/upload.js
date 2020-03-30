var selectElement       = document.querySelector("#tipo");
var buttonElement       = document.querySelector("button");

buttonElement.setAttribute('name', 'btnTexto');

selectElement.addEventListener('click', function() {
    var log     = selectElement.value;

    if (log === "Texto") {
        buttonElement.setAttribute('name', 'btnTexto');
    } else {
        buttonElement.setAttribute('name', 'btnVideo');
    }
});