<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'sys';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

    if(!$conexao)
    {
        echo"<p style='color:red; text-align:center; font-size:25px;'>ERRO DE CONEXÃO!</p>";
    }


    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $usuario = $_POST["inputbox1"];
        $email = $_POST["inputbox2"];
        $senha = $_POST["inputbox3"];
        $confirmasenha = $_POST["inputbox4"];

        if($senha ==$confirmasenha){
            $sql = "SELECT * FROM inputbox1 WHERE inputbox1 ='$usuario'";
            $retorno = mysqli_query($conexao, $sql);
            $row = mysqli_fetch_assoc($retorno);

            if($row){
                echo"<p style='color:red; text-align:center; font-size:25px;'>USUÁRIO EXISTENTE!</p>";
                echo"<h2 style = 'color:blue; text-align:center; font-size:25px'><a href='Cadastro.htlm'>VOLTAR</a></h2>";
            } else{

                $rashsenha = password_hash($senha, PASSWORD_BCRYPT);
                $sql = "INSERT INTO inputbox1 {inputbox1, inputbox2) values('$usuario','$rashsenha')";
                $retorno = mysqli_query($conexao, $sql);

                if($retorno ===true){
                    echo"<p style='color:green; text-align:center; font-size:25px;'>CADASTRO REALIZADO!</p>";
                } else{

                    echo"ERRO AO CADASTRAR USUÁRIO:". $conexao->error;
                    echo"<h2 style = 'color:blue; text-align:center; font-size:25px'><a href='Cadastro.htlm'>VOLTAR</a></h2>";
                }
            }
        } else{
            echo"<p style='color:blue; text-align:center; font-size:25px;'>AS SENHAS ESTÃO DIFERENTES!</p>";
            echo"<h2 style = 'color:blue; text-align:center; font-size:25px'><a href='Cadastro.htlm'>VOLTAR</a></h2>";
         }
    }

    $conexao->close();
?>