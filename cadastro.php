<?php
    include("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
        $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : "";
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $senha = isset($_POST['senha']) ? $_POST['senha'] : "";
        
        $sql = "INSERT INTO cadastro (nome, sobrenome, usuario, email, senha)
                VALUES ('$nome', '$sobrenome', '$usuario', '$email', '$senha')";
    
        if (mysqli_query($conexao, $sql)) {
            echo "Usuário cadastrado com sucesso";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }
    
        mysqli_close($conexao);
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    

    <link rel="shortcut icon" href="img/logo-sem-funfo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/components/resets.css">
    <link rel="stylesheet" href="css/components/button.css">
    <link rel="stylesheet" href="css/components/login.css">

</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <img src="img/logo-sem-funfo.png" width="500px" alt="Logo da loja">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Cadastre-se</h1>
                <form method="POST" action="">
                    <div class="textfield">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" placeholder="Nome">
                    </div>

                    <div class="textfield">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" name="sobrenome" placeholder="Sobrenome">
                    <div class="textfield">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>

                    <button type="submit" class="button" lang="en">Cadastre-se</button>
                </form>

                <p>
                    Já tem uma conta?
                    <a href="login.php">Ir para o Login</a>
                </p>

                <p>
</body>

<script src="./js/index.js"></script>

</php>
                   
