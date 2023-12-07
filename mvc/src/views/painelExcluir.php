<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Excluir Usuário</h1>
    <form method="post" action="../controller/excluir.php">
        <label for="id">ID do Usuário:</label>
        <input type="number" name="id" id="id" required>
        <button type="submit">Excluir</button>
    </form>

</body>
</html>
