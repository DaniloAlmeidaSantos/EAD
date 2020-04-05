var selectElement   = document.querySelector("select");
var linkElement     = document.querySelector("#link");

selectElement.addEventListener('click', function() {
    if (selectElement.value == "texto") {
        linkElement.setAttribute("href", "?getTexto");
    } else {
        linkElement.setAttribute("href", "?getVideo");
    }
});