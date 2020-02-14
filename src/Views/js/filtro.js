var ç = document.querySelector.bind(document);
var inputFiltro = ç("#filtro");

inputFiltro.addEventListener("keyup", function () {

    var digitado = inputFiltro.value;
    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {

            var lista = JSON.parse(ajax.responseText);

        }
    }
    ajax.open("GET", "../Controllers/FiltroController.php?digitado=" + digitado, true);
    ajax.send();
})