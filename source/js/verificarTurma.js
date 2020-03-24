var selectElement   = document.querySelector('#select');
var inputElement    = document.querySelector('#txtBusca');

selectElement.addEventListener('click', function() {
    var log     = selectElement.value;
    inputElement.setAttribute('placeholder', log);
});