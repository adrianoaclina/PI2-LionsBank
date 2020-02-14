window.onload = function () {

    var ç = document.querySelector.bind(document);
    $('#mssg-cad-error').hide();
    $('#mssg-cad-sucess').hide();
    var btnCadastrar = ç("#submit");
    btnCadastrar.onclick = function (event) {
        event.preventDefault();
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText == "1") {
                    $('#mssg-cad-sucess').show().addClass('animate');
                    setTimeout(function () {
                        window.location.href = "loginView.php";
                    }, 1500);

                } else {
                    $('#mssg-cad-error').show().addClass('animate');
                    setTimeout(function () {
                        $('#mssg-cad-error').hide().removeClass('animate');
                    }, 2500);
                }

            }
        }
        var id = ç("#id").value;
        var nome = ç("#nome").value;
        var sobrenome = ç("#sobrenome").value;
        var email = ç("#email").value;
        var senha = ç("#senha").value;
        var cpf = ç("#cpf").value;
        var telefone = ç("#telefone").value;
        var usuario = new Object();
        usuario.id = id;
        usuario.nome = nome;
        usuario.sobrenome = sobrenome;
        usuario.email = email;
        usuario.senha = senha;
        usuario.cpf = cpf;
        usuario.telefone = telefone;
        var json = JSON.stringify(usuario);
        ajax.open("POST", "../Controllers/CadastroController.php");
        ajax.setRequestHeader("Content-type", "application/json");
        ajax.send(json);
    }
}