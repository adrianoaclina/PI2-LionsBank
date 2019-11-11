<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/LoginStyle.css">
    <title>Bank Account</title>
</head>

<body>
    <main class="cont">
        <section class="main">
            <section class="lado1">
                <h1>Cadastro</h1>
                <form method="POST" action="../Controllers/LoginController.php">
                    <input type="hidden" name="id">
                    <label for="cad_nome">Nome</label>
                    <input type="text" name="cad_nome" placeholder="Digite o nome completo">
                    <br>
                    <label for="cad_email">Email</label>
                    <input type="email" name="cad_email">
                    <br>
                    <label for="cad_senha">Senha</label>
                    <input type="password" name="cad_senha">
                    <br>
                    <input type="submit" value="Cadastrar">
                </form>
            </section>
            <section class="lado2">
                <h1>Login</h1>
                <form method="POST" class="form" action="../Controllers/LoginController.php">
                    <label for="email">Email</label>
                    <input type="text" name="login_email" id="email">
                    <br>
                    <label for="senha">Senha</label>
                    <input type="password" name="login_senha" id="senha">
                    <br>
                    <input type="submit" value="Login" name="submit" id="submit">
                </form>
            </section>
        </section>
    </main>
</body>

</html>