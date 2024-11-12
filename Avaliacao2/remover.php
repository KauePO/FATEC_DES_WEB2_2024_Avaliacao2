<?php
require('classes/login.php');
require('classes/Cadastro.php');
$validador = new Login();
$validador->verificar_logado();

$cadastro = new Cadastro();
?>
<link rel="stylesheet" href="css/style.css">

<div class="container">
    <div class=box> <h2 class="textlogin">Remover Vaga</h2>
    <form action=processa_remocao.php method="POST">
        <label for="id">Id:</label>
        <input type=number id="id" name="id" placeholder="Insira o ID da vaga"required><br><br>
        <input class="botaoentrar" type="submit" value="Entrar">
    </form>

    <a href="home.php" class="custom-button">Voltar</a>

