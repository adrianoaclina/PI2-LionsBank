// Listagem da tabela de transferencias
$(document).ready(function () {
    $('#tbody').empty(); //Limpando a tabela
    $.ajax({
        type: 'post',		//Definimos o método HTTP usado
        dataType: 'json',	//Definimos o tipo de retorno
        url: '../Controllers/DashboardController.php',//Definindo o arquivo onde serão buscados os dados
        success: function (dados) {
            for (var i = 0; dados.length > i; i++) {
                if (i % 2 == 0) {
                    if (i != 0) {
                        dados[i].id = dados[i - 1];
                        if (dados[i].recebedor == dados[i].id) {
                            $('#tbody').append('<tr><td>' + dados[i].idTransferencia + '</td><td style="color: green;">' + dados[i].valor + '</td><td>' + dados[i].dataT + '</td><td><button class="btn delete" onclick="deletar(this);" style="padding: 0rem .75rem;" name="deletar" value = "' + dados[i].idTransferencia +
                                '"><i class="material-icons">delete_forever</i></button></td><td><button  class="btn detalhes" onclick="detalhes(this);" style="padding: 0rem .75rem;" name="detalhes" value="' + dados[i].idTransferencia +
                                '" data-toggle="modal" data-target="#modalDetalhes"><i class="material-icons">reorder</i></button></td></tr>');
                        } else {
                            $('#tbody').append('<tr><td>' + dados[i].idTransferencia + '</td><td style="color: red;">(' + dados[i].valor + ')</td><td>' + dados[i].dataT + '</td><td><button class="btn delete" onclick="deletar(this);" style="padding: 0rem .75rem;" name="deletar" value = "' + dados[i].idTransferencia +
                                '"><i class="material-icons">delete_forever</i></button></td><td><button  class="btn detalhes" onclick="detalhes(this);" style="padding: 0rem .75rem;" name="detalhes" value="' + dados[i].idTransferencia +
                                '" data-toggle="modal" data-target="#modalDetalhes"><i class="material-icons">reorder</i></button></td></tr>');
                        }
                    } else {
                        dados[i].id = dados[i + 1];
                        if (dados[i].recebedor == dados[i].id) {
                            $('#tbody').append('<tr><td>' + dados[i].idTransferencia + '</td><td style="color: green;">' + dados[i].valor + '</td><td>' + dados[i].dataT + '</td><td><button class="btn delete" onclick="deletar(this);" style="padding: 0rem .75rem;"  name="deletar" value = "' + dados[i].idTransferencia +
                                '"><i class="material-icons">delete_forever</i></button></td><td><button  class="btn detalhes" onclick="detalhes(this);" style="padding: 0rem .75rem;" name="detalhes" value="' + dados[i].idTransferencia +
                                '" data-toggle="modal" data-target="#modalDetalhes"><i class="material-icons">reorder</i></button></td></tr>');
                        } else {
                            $('#tbody').append('<tr><td>' + dados[i].idTransferencia + '</td><td style="color: red;">(' + dados[i].valor + ')</td><td>' + dados[i].dataT + '</td><td><button class="btn delete" onclick="deletar(this); "style="padding: 0rem .75rem;" name="deletar" value = "' + dados[i].idTransferencia +
                                '"><i class="material-icons">delete_forever</i></button></td><td><button  class="btn detalhes" onclick="detalhes(this);" style="padding: 0rem .75rem;" name="detalhes" value="' + dados[i].idTransferencia +
                                '" data-toggle="modal" data-target="#modalDetalhes"><i class="material-icons">reorder</i></button></td></tr>');
                        }
                    }
                }
            }
        }
    });
});

$(document).ready(function () {
    $('#saldo').empty(); //Limpando a tabela
    $.ajax({
        type: 'post',		//Definimos o método HTTP usado
        dataType: 'json',	//Definimos o tipo de retorno
        url: '../Controllers/SaldoController.php',//Definindo o arquivo onde serão buscados os dados
        success: function (dados) {
            $("#saldo").html(dados[0].saldo + " reais");
        }
    });
});

var feedback = document.getElementById('feedback');
feedback.style.display = "none"; //Esconde o elemento com id errolog
var btnFeedback = document.getElementById('btnFeedback');
btnFeedback.addEventListener('click', function () {
    if (feedback.style.display == "block") {
        feedback.style.display = "none";
    } else {
        feedback.style.display = "block";
    }
    var enviar = document.getElementById("enviarFeedback");
    enviar.addEventListener('click', function (event) {
        event.preventDefault();
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText == "1") {
                    alert("Feedback realizado com sucesso");
                } else {
                    alert("Não foi possível realizar seu feedback nesse momento, tente novamente mais tarde");
                }
            }
        }
        var text = document.getElementById("text_feedback").value;
        var parametros = "text_feedback=" + encodeURIComponent(text);
        ajax.open("POST", "../Controllers/FeedbackController.php");
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send(parametros);
    });

});


