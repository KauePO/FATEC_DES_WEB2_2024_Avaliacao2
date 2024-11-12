<?php
require('classes/login.php');
require('classes/Cadastro.php');
$validador = new Login();
$validador->verificar_logado();

$cadastro = new Cadastro();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome_empresa = $_POST['nome_empresa'];
    $numero_whatsapp = $_POST['numero_whatsapp'];
    $email_contato = $_POST['email_contato'];
    $descritivo_vaga = $_POST['descritivo_vaga'];
    $curso = $_POST['curso'];


    $cadastro->cadastrarVaga($nome_empresa, $numero_whatsapp, $email_contato, $descritivo_vaga, $curso);
}


?>
<link rel="stylesheet" href="css/style.css">
<a href="home.php" class="custom-button">Voltar</a>
