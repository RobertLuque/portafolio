var correo = document.getElementById("correo-copy");
function copiarAlPortapapeles(correo) {
    var aux = document.createElement("input");
    aux.setAttribute("value", document.getElementById("correo-copy").innerHTML);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
}