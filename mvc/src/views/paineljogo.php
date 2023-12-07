<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Cadastro de Jogo</title>
</head>
<body>
  <h1>Cadastro de Jogo</h1>

  <form action="../controller/jogoInserir.php" method="post">
   <!-- <input type="number" name="idjogos" placeholder="ID"> -->
    <input type="text" name="nome" placeholder="Nome do Jogo">
    <input type="text" name="plataforma" placeholder="Plataforma">
    <input type="text" name="genero" placeholder="Gênero">
    <input type="number" name="preco" placeholder="Preço">
    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>
