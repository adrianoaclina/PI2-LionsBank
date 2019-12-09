window.onload = function () {
    var ç = document.querySelector.bind(document);
    var btnTransferir = ç("#submit");
    $('#mssg-cad-error').hide();
    $('#mssg-cad-sucess').hide();
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.valor').mask('0000000000,00', {reverse: true});
    btnTransferir.onclick = function (event) {
        event.preventDefault();
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText == "3") {
                    alert("Preencha os campos corretamente");
                }
                if (ajax.responseText == "1") {
                    $('#mssg-cad-sucess').show().addClass('animate');
                    setTimeout(function () {
                        window.location.href = "Dashboard.php";
                    }, 3000);

                } else {
                    $('#mssg-cad-error').show().addClass('animate');
                    setTimeout(function () {
                        $('#mssg-cad-error').hide().removeClass('animate');
                    }, 3000);
                }

            }
        }
        var contaR = ç("#contaR").value;
        var nomeR = ç("#nomeR").value;
        var cpfR = ç("#cpfR").value;
        var valor = ç("#valor").value;

        var transferencia = new Object();
        transferencia.contaR = contaR;
        transferencia.nomeR = nomeR;
        transferencia.cpfR = cpfR;
        transferencia.valor = valor;
        var json = JSON.stringify(transferencia);

        ajax.open("POST", "../Controllers/TransferenciaController.php");
        ajax.setRequestHeader("Content-type", "application/json");
        ajax.send(json);
    }
}