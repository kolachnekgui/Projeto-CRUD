<?php

include('../../lib/conexao.php');

$sql = "SELECT * FROM CADASTRO_DE_USUARIO";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID_USUARIO</th>";
    echo "<th>Nome</th>";
    echo "<th>CPF</th>";
    echo "<th>DATA_DE_NASCIMENTO</th>";
    echo "<th>CEP</th>";
    echo "<th>E_MAIL</th>";
    echo "<th>ENDERECO</th>";
    echo "<th>TELEFONE</th>";
    echo "</tr>";

    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $linha['ID_USUARIO'] . "</td>";
        echo "<td>" . $linha['NOME'] . "</td>";
        echo "<td>" . $linha['CPF'] . "</td>";
        echo "<td>" . $linha['DATA_DE_NASCIMENTO'] . "</td>";
        echo "<td>" . $linha['CEP'] . "</td>";
        echo "<td>" . $linha['E_MAIL'] . "</td>";
        echo "<td>" . $linha['ENDERECO'] . "</td>";
        echo "<td>" . $linha['TELEFONE'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Erro ao listar registros: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
