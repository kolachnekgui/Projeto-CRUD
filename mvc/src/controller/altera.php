<?php

include('../../lib/conexao.php');

if (isset($_POST['ID_USUARIO']) && isset($_POST['novo_nome'])) {
    $ID_USUARIO = $_POST['ID_USUARIO'];
    $novo_nome = $_POST['novo_nome'];

    $sql = "UPDATE CADASTRO_DE_USUARIO
            SET nome = '$novo_nome' 
            WHERE ID_USUARIO = $ID_USUARIO;";

    if (mysqli_query($conexao, $sql)) {
        echo 'Nome do usuário atualizado com sucesso';
    } else {
        echo 'Erro ao atualizar o nome do usuário';
    }
} else {
    echo 'ID de usuário ou novo nome não fornecidos';
}
?>
