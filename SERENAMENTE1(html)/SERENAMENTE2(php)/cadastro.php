<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <header class="header">
        <img class = "logo_secundaria" src="img/logo_header.png" alt="">
        <div class="conta">
            <p>Possui conta?</p>
            <button class="btn1">Entrar</button>
        </div>
    </header>
    <form id = "form" onsubmit="return validarFormulario()">
        <div class="titulo">
            <h1>CADASTRO</h1>
        </div>
        <br><br>
        <div class="inputbox">
            <label for="nome" class="labelinput">Usuário:</label>
            <input type="text" name="nome" id="nome" class="inputuser">
            <span id="nome-erro" class="erro">O nome não pode estar vazio.</span>
        </div>
        <br>
        <div class="inputbox">
            <label for="email" class="labelinput">E-mail:</label>
            <input type="email" name="email" id="email" class="inputuser">
            <span id="email-erro" class="erro">Por favor, insira um email válido.</span>
        </div>
        <br>
        <div class="inputbox">
            <label for="senha" class="labelinput">Digite sua senha:</label>
            <input type="password" name="senha" id="senha" class="inputuser">
            <span id="senha-erro" class="erro">A senha deve ter pelo menos 6 caracteres.</span>
        </div>
        <br>
        <div class="inputbox">
            <label for="confirmar" class="labelinput">Confirme a senha:</label>
            <input type="password" name="confirmar" id="confirmar" class="inputuser">
            <span id="confirmar-senha-erro" class="erro">As senhas não estão iguais.</span>
        </div>
        <br>
        <div id="btn">
            <button type="submit" class="btn">
                CADASTRAR
            </button>
        </div>
    </form>

      <script>
        // Função para validar o formulário completo
        function validarFormulario() {
            // Seleção dos campos de entrada e mensagens de erro
            const email = document.getElementById('email');
            const nome = document.getElementById('nome');
            const senha = document.getElementById('senha');
            const confirmarSenha = document.getElementById('confirmar');
        
            const emailError = document.getElementById('email-erro');
            const nomeError = document.getElementById('nome-erro');
            const senhaError = document.getElementById('senha-erro');
            const confirmarSenhaError = document.getElementById('confirmar-senha-erro');
        
            let isValid = true;
        
            // Validação do email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                email.classList.add('error');
                emailError.style.display = 'block';
                isValid = false;
            } else {
                email.classList.remove('error');
                emailError.style.display = 'none';
            }
        
            // Validação do nome
            if (nome.value.trim() === "") {
                nome.classList.add('error');
                nomeError.style.display = 'block';
                isValid = false;
            } else {
                nome.classList.remove('error');
                nomeError.style.display = 'none';
            }
        
            // Validação da senha
            if (senha.value.length < 6) {
                senha.classList.add('error');
                senhaError.style.display = 'block';
                isValid = false;
            } else {
                senha.classList.remove('error');
                senhaError.style.display = 'none';
            }
        
            // Validação da confirmação da senha
            if (senha.value !== confirmarSenha.value) {
                confirmarSenha.classList.add('error');
                confirmarSenhaError.style.display = 'block';
                isValid = false;

            elseif (senha.value == false); {
                confirmarSenha.classList.remove('error');
                confirmarSenhaError.style.display = 'none';
            } 
            } 
            else {
                confirmarSenha.classList.remove('error');
                confirmarSenhaError.style.display = 'none';
            }
        
            // Apenas prossegue se todos os campos forem válidos
            if (isValid) {

                const dados = {
                    nome: nome.value,
                    email: email.value,
                    senha: senha.value
                };

                fetch('seu-backend-endpoint.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(dados) 
                })
                .then(response => response.json())
                .then(data => {
                    if (data.sucesso) {
                        window.location.href = 'agnedamento.html'; 
                    } else {
                        alert('Erro ao cadastrar. Tente novamente.');
                    }
                })
                .catch(error => {
                    console.error('Erro ao enviar os dados:', error);
                });
            }
        }
    </script>


</body>
</html>