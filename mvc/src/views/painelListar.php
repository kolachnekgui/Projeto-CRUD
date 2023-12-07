<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Listar Usuários</h1>

    <table border="1">
        <thead>
            <tr>
            <th>ID_USUARIO</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>DATA_DE_NASCIMENTO</th>
            <th>CEP</th>
            <th>E_MAIL</th>
            <th>ENDERECO</th>
            <th>TELEFONE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../controller/listar.php');
            ?>
        </tbody>
    </table>

</body>
</html>
