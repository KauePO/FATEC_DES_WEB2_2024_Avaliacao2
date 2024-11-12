<?php
require('classes/login.php');
require('classes/Cadastro.php');
$validador = new Login();
$validador->verificar_logado();

$cadastro = new Cadastro();
?>
<link rel="stylesheet" href="css/style.css">


<div class="container">
    <div class="box"> <h2 class="textlogin">Cadastro</h2>
    <form action=processa_cadastro.php method="POST">
        <label for="nome_empresa">Nome da Empresa:</label>
        <input type="text" id="nome_empresa" name="nome_empresa" placeholder="Insira o nome da empresa"required><br><br>
        <label for="numero_whatsapp">Número de whatsapp:</label>
        <input type="text" id="numero_whatsapp" name="numero_whatsapp" placeholder="Insira o numero da empresa"required><br><br>
        <label for="email_contato">Email de Contato:</label>
        <input type="text" id="email_contato" name="email_contato" placeholder="Insira o email da empresa"required><br><br>
        <label for="descritivo_vaga">Descritivo da Vaga:</label>
        <input type="text" id="descritivo_vaga" name="descritivo_vaga" placeholder="Descreva a vaga"required><br><br>
        <label for="curso">Curso (1 para DSM - 2 para GM):</label>
        <input type="number" id="curso" name="curso" placeholder="Insira o curso"required><br><br>
        <input class="botaoentrar" type="submit" value="Entrar">
    </form>

    <a href="home.php" class="custom-button">Voltar</a>

