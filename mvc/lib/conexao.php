<?php

$servidor = '191.252.194.174';
$usuario = 'admin_40075758';
$senha = 'a40075758';
$banco_dados = 'admin_a40075758';
$porta = '3306';

$conexao = mysqli_connect(
    $servidor,
    $usuario,
    $senha,
    $banco_dados,
    $porta)

    or die(mysqli_connect_error());



