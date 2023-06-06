<?php
    session_start();
    include("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cadastro WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['usuario'] = $usuario;
            header("Location: admin/index.php");
            exit();
        } else {
            
            $erro = "Usuário ou senha incorretos.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
                <h1>Login</h1>
                <?php if(isset($erro)) { echo "<p class='error'>$erro</p>"; } ?>
                <form method="POST" action="">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>

                    <button type="submit" class="button">Login</button>
                </form>

                <p class="links">
                    Não tem conta?
                    <a href="cadastro.php">Ir para Cadastre-se</a>
                </p>

                <p class="links">
                    Voltar para início?
                    <a href="index.php">Ir para Início</a>
                </p>
            </div>
        </div>
    </div>
    </body>

<script src="./js/index.js"></script>

</php>
