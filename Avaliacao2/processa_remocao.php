<?php
require('classes/login.php');
require('classes/Cadastro.php');
$validador = new Login();
$validador->verificar_logado();

$cadastro = new Cadastro();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];


    $cadastro->removerVaga($id);
}


?>

<link rel="stylesheet" href="css/style.css">
<a href="home.php" class="custom-button">Voltar</a>
