var inputPesquisaElement    = document.querySelector('#txtPesquisar');
var contador                = document.querySelector('#contador');

function trocarTexto() {
    for (var i = 0; i <= contador; i++) {
        var hidden = document.querySelector('#'+i);
        var link = document.querySelector('#'+i);

        link.onclick = function() {
            var att1 = hidden.getAttribute('id');
            var att2 = link.getAttribute('id');

            if (att1 == att2) {
                var data = hidden.value;

                inputPesquisarElement.setAttribute('value', data);
            }
        }
    }
}