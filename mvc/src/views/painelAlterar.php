<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Alterar Usuário</h1>
    <form method="POST" action="../controller/altera.php">
        <label for="ID_USUARIO">ID do Usuário:</label>
        <input type="text" name="ID_USUARIO" id="ID_USUARIO" required>
        <br><br>
        
        <label for="novo_nome">Novo Nome:</label>
        <input type="text" name="novo_nome" id="novo_nome" required>
        <br><br>
        
        <input type="submit" value="Atualizar Usuário">
    </form>
</body>
</html>
