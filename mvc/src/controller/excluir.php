<?php

include('../../lib/conexao.php');

$CADASTRO_DE_USUARIO = $_POST['id'];

$sql = "delete from CADASTRO_DE_USUARIO
        where ID_USUARIO = {$CADASTRO_DE_USUARIO} ";

if (mysqli_query($conexao, $sql)) {
    echo 'Deletado com sucesso';
} else {
    echo 'Erro ao deletar';
}
?>
<br><br>

