<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <header class="header">
        <img class = "logo_secundaria" src="img/logo_header.png" alt="">
        <div class="conta">
            <p>Não possui conta?</p>
            <button type="submit" class="btn1">
                Cadastre-se
            </button>
        </div>
    </header>
    <div id = "form">
        <div class="titulo">
            <h1>LOGIN</h1>
        </div>
        <br><br>
        <div class="inputbox">
            <label for="nome" class="labelinput">Usuário:</label>
            <input type="text" name="nome" id="nome" class="inputuser">
        </div>
        <br>
        <br>
        <div class="inputbox">
            <label for="senha" class="labelinput">Digite sua senha:</label>
            <input type="password" name="senha" id="senha" class="inputuser">
        </div>
        <br>
        <br>
        <div id="btn">
            <button type="submit" class="btn">
                ENTRAR
            </button>
        </div>
        <br>
    </div>
</body>
</html>