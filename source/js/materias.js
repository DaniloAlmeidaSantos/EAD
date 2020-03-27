var inputPesquisaElement    = document.querySelector('#txtPesquisar');
var contador                = document.querySelector('#contador');

function trocarTexto() {
    console.log(contador);
    for (var i = 0; i < cont; i++) {
        var query = '#'+i+'';
        var nome = document.querySelector(query).text;

        inputPesquisaElement.setAttribute('value', nome);
    }
}