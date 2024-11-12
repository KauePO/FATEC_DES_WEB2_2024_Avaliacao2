<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center>
        <h2>Vagas de Estágio</h2>
    </center>
    
    <br>

    <a href="cadastrar.php" class="custom-button">Cadastrar Vaga</a>
    <a href="listar.php" class="custom-button">Listar Vagas</a>
    <a href="remover.php" class="custom-button">Remover Vaga</a>

    <br><br> 
    <a href="login.php" class="logout">Logout</a>
</body>
</html>