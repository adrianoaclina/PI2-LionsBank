window.addEventListener("load", function () {

    $(".tbody").empty();
    $.ajax({
        type: 'post',		//Definimos o método HTTP usado
        dataType: 'json',	//Definimos o tipo de retorno
        url: '../Controllers/PerfilController.php',//Definindo o arquivo onde serão buscados os dados
        success: function (dados) {
            $(".h1P").html("Perfil de " + dados['nome']);
            $(".tbody").html("<tr><th scope='row'>Conta</th><td>" + dados["idUsuario"] + "</td></tr><tr><th scope='row'>Nome</th><td>" + dados["nome"] + "</td></tr><tr><th scope='row'>Sobrenome</th><td>" + dados["sobrenome"] + "</td></tr><tr><th scope='row'>Email</th><td>" + dados["email"] + "</td></tr><tr><th scope='row'>CPF</th><td>" + dados["cpf"] + "</td></tr><tr><th scope='row'>Telefone</th><td>" + dados["telefone"] + "</td></tr>");

        }
    });
});