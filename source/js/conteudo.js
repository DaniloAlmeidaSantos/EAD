var selectElement   = document.querySelector('#select');
var linkElement     = document.querySelector('#pesquisar');

linkElement.setAttribute('href', '#1');

selectElement.addEventListener('click', function() {
    var log = selectElement.value;

    linkElement.setAttribute('href', "#"+log);
});