<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    $sql = "INSERT INTO contatos (name, email, message) VALUES ('$nome', '$email', '$mensagem')";

    if (mysqli_query($conexao, $sql)) {
        echo "Mensagem enviada com sucesso";
    } else {
        echo "Erro ao enviar a mensagem: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contate-nos</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="img/logo-sem-funfo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/components/header.css">
    <link rel="stylesheet" href="css/components/resets.css">
    <link rel="stylesheet" href="css/components/button.css">
    <link rel="stylesheet" href="css/components/action.css">
    <link rel="stylesheet" href="css/components/contato.css">
</head>
<body>
<header class="header">
            <img class="logo" src="img/logo-sem-funfo.png" width="60px" alt="Logo da marca">
            <nav>
                <a class="action" href = "index.php">Início</a>
                <a class="action" href = "contato.php">Contate-nos</a>
                <a class="button" href = "cadastro.php" lang="en">Cadastre-se</a>
              <a class="button" href = "login.php" lang="en">Login</a>
            </nav>

            <button id="botao-alterar-tema">
                <img width="30px" src="./img/sun.png"  alt="sol imagem" class="imagem-botao">
            </button>

        </header>

    <h1>Contate-nos</h1>
    <div class="contact-form">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" class="form-input" required>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="form-input" required>
        <label for="message">Mensagem</label>
        <textarea id="message" name="message" class="form-input form-textarea" required></textarea>

        <button class="button" type="submit">Enviar</button>

      </form>
    </div>
    <div class="contact-info">
      <div class="contact-info-item">
      <i class="fa fa-map-marker"></i>
        <h3>Endereço</h3>
        <p>Rua do Leão, 1234<br>Centro<br>Manaus - AM</p>
      </div>
      <div class="contact-info-item">
        <i class="fa fa-phone"></i>
        <h3>Telefone</h3>
        <p>(92) 1234-5678</p>
      </div>
      <div class="contact-info-item">
        <i class="fa fa-envelope"></i>
        <h3>E-mail</h3>
        <p>buyeasyminiplataforma@gmail.com</p>
      </div>
    </div>
    </body>

<script src="./js/index.js"></script>

</php>
