<?php
session_start();
include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = md5($_POST['senha']); // Criptografa a senha para comparar com o banco

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email; // Define a sessão
        header("Location: agendas.php"); // Redireciona para a página restrita
        exit();
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

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
            <button type="submit" class="btn1" onclick="window.location.href='cadastro.php'">
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
            <label for="email" class="labelinput">Email:</label>
            <input type="email" name="email" id="email" class="inputuser">
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
