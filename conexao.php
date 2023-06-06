<?php
    $servername = "us-cdbr-east-06.cleardb.net";
    $username = "b28accc346bf18";
    $password = "ca29549d";
    $database = "heroku_7be31bde873a04e";

    $conexao = mysqli_connect($servername, $username, $password, $database);

    if (!$conexao) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }
?>
