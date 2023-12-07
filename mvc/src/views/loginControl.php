<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$erro = "";

if ($usuario == '') {
    $erro = "Informe o Usuario <br>";
}
if ($senha == '') {
    $erro .= "Informe Senha";
}
if ($erro != '') {
    echo $erro;
    exit;
}

if (strtolower($usuario) == 'gui' && $senha = 789) {

    $_SESSION['usuario'] = strtolower($usuario);
    header('Location: index.php');

} else {
    echo 'Erro no login!!!!';
}




