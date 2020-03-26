var videoElement    = document.querySelector('video');
var divElement      = document.querySelector('#proximo');

function proximo() {
    var linkElement = document.createElement('a');

    linkElement.innerText = "Próximo video?";
    linkElement.setAttribute('href', '?next=true');

    divElement.appendChild(linkElement);
}