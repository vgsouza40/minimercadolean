<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>
</head>
<body>

<?php
    session_start();
    include("conexao.php");

    // Verificar se o usuário está autenticado
    if (!isset($_SESSION['user_id'])) {
        // Redirecionar para a página de login ou exibir uma mensagem de erro
        header("Location: login.php"); // Substitua "login.php" pelo nome da página de login
        exit;
    }

    include "./adminHeader.php";
    include "./sidebar.php";
    include_once "./config/dbconnect.php";
?>

<!-- Resto do seu código HTML/PHP -->

</body>
</html>
