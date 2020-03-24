var selectElement       = document.querySelector("#select");
var buttonElement       = document.querySelector("#btnUpload");

buttonElement.setAttribute('name', 'btnTexto');

selectElement.addEventListener('click', function() {
    var log     = selectElement.value;

    if (log === "Texto") {
        buttonElement.setAttribute('name', 'btnTexto');
    } else {
        buttonElement.setAttribute('name', 'btnVideo');
    }
});