<?php 
include('../../lib/conexao.php');

$nome = $_POST['nome'];
$plataforma = $_POST['plataforma'];
$genero = $_POST['genero'];
$preco = $_POST['preco'];

$validar = true;
$mensagemErro = '';

if ($nome == '') {
    $mensagemErro .= 'Informe o Nome <br/>';
    $validar = false;
}
if ($plataforma == '') {
    $mensagemErro .= 'Informe o Plataforma <br/>';
    $validar = false;
}
if ($genero == '') {
    $mensagemErro .= 'Informe o gênero <br/>';
    $validar = false;
}
if ($preco == '') {
    $mensagemErro .= 'Informe o Preço <br/>';
    $validar = false;
}

if ($validar == true) {
    $sql = "INSERT INTO NOVO_JOGO (NOME, PRECO, GENERO, PLATAFORMA) 
            VALUES ('{$nome}', '{$preco}', '{$genero}','{$plataforma}')"; 
            
            if (mysqli_query($conexao, $sql)) {
                echo 'Inserido com sucesso';
            } else {
                echo 'Erro ao inserir';                
            }
};