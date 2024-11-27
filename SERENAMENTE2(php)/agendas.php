<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location: landingpage.html"); // Redireciona se já estiver logado
    exit();
}
?>
    
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escolha de Professores</title>
    <link rel="stylesheet" href="agendas.css">
</head>
<body>
    <header class="header">
        <img class = "logo_secundaria" src="img/logo_header.png" alt="">
        <div class="conta">
            <p>Possui conta?</p>
            <button class="btn1">Entrar</button>
        </div>
    </header>
    <h1>Agendamento Legal</h1>
    <div class="filtragem">
        <div id="filters">
            <label>Áreas:</label>
            <input type="text" id="especialidade" placeholder="Social, Hospitalar, etc.">
            <label>Preço:</label>
            <input type="number" id="avaliacao" min="1" max="5">
            <label>Local:</label>
            <input type="number" id="precoMax">
            <button onclick="filtrarProfessores()">Filtrar</button>
        </div>
        <div id="professores-lista"></div>
        <script src="scripts/script.js"></script>
    </div>
</div>
<br>
<br>
<br>
<div class="elementosS">
    <div class="foto">
        <img src="IMAGENS/serenamente 1.png" alt="">
    </div>
        <div class="nomee">
            <h1>Maria E.</h1>
        </div>
        <div class="custoDIA">
            <h1> R$50,00</h1>
        </div>
            <div class="sub1">
                    <dt>Estado</dt>
            </div>
            <div class="sub2">
                    <dt>Horário</dt>
            </div>
            <div class="sub3">
                    <dt>Área que Atua</dt>
            </div>
        <div onclick="abrirmodal()" class="BUTAO">
            Agendar Tratamento
        </div>
</div>
<div class="elementosS">
    <div class="foto">
        <img src="IMAGENS/serenamente 1.png" alt="">
    </div>
        <div class="nomee">
            <h1>Maria E.</h1>
        </div>
        <div class="custoDIA">
            <h1> R$50,00</h1>
        </div>
            <div class="sub1">
                    <dt>Estado</dt>
            </div>
            <div class="sub2">
                    <dt>Horário</dt>
            </div>
            <div class="sub3">
                    <dt>Área que Atua</dt>
            </div>
        <div onclick="abrirmodal()" class="BUTAO">
            Agendar Tratamento
        </div>
</div>
<div class="elementosS">
    <div class="foto">
        <img src="IMAGENS/serenamente 1.png" alt="">
    </div>
        <div class="nomee">
            <h1>Maria E.</h1>
        </div>
        <div class="custoDIA">
            <h1> R$40,00</h1>
        </div>
            <div class="sub1">
                    <dt>Estado</dt>
            </div>
            <div class="sub2">
                    <dt>Horário</dt>
            </div>
            <div class="sub3">
                    <dt>Área que Atua</dt>
            </div>
        <div onclick="abrirmodal()" class="BUTAO">
            Agendar Tratamento
        </div>
</div>
<div class="elementosS">
    <div class="foto">
        <img src="IMAGENS/serenamente 1.png" alt="">
    </div>
        <div class="nomee">
            <h1>Maria E.</h1>
        </div>
        <div class="custoDIA">
            <h1> R$50,00</h1>
        </div>
            <div class="sub1">
                    <dt>Estado</dt>
            </div>
            <div class="sub2">
                    <dt>Horário</dt>
            </div>
            <div class="sub3">
                    <dt>Área que Atua</dt>
            </div>
        <div onclick="abrirmodal()" class="BUTAO">
            Agendar Tratamento
        </div>
</div>

 


<div class="janela-modal" id="janela-modal">
    <div class="modal">
        <button class="fechar" id="fechar">X</button>
        <h1>Registre-se para continuar</h1>
        <br>
        <br>
        <br>
        <p>Nossa site pede para fazer isso,</p>
        <p>tanto para contrato como para mensagem.</p>
        <br>
        <br>
        <br>
        <button>Registrar</button>
        <button>Logar</button>
    </div>

    <script src="scripts.js"></script>

</div>
</body>
</html>
