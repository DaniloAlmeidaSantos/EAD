var selectElement       = document.querySelector("#select");
var inputFileElement    = document.querySelector("#inputFile");

inputFileElement.setAttribute('name', 'texto');

selectElement.addEventListener('click', function() {
    var log     = selectElement.value;

    if (log === "Texto") {
        inputFileElement.setAttribute('name', 'texto');
    } else {
        inputFileElement.setAttribute('name', 'video');
    }
});