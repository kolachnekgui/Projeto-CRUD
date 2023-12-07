<?php session_start();

if (empty($_SESSION['usuario'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <h1>Página Inicial</h1>

    <div class="menu">
        <nav>
            <span>Cadastrar &nbsp;
                <a href="painelInserir.php"> usuario</a> | 
                <a href="paineljogo.php"> jogo</a>
            </span>

            <a href="painelAlterar.php">Alterar</a>
           
            <a href="painelListar.php">Listar</a>
            <a href="painelExcluir.php">Excluir</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>


    <div class="conteudo">
        <h2>Jogos</h2>

        <div class="jogo">
            <img src="../../img/red2.jpeg" alt="">
            <h3>Red dead redemption 2 </h3>
            <p>Preço: R$ 100,00</p>
        </div>

        <div class="jogo">
            <img src="../../img/ellie.jpeg" alt="">
            <h3>The last of us part 2</h3>
            <p>Preço: R$ 200,00</p>
        </div>

        <div class="jogo">
            <img src="../../img/bomdeguerra.jpeg" alt="">
            <h3>God of war ragnarok</h3>
            <p>Preço: R$ 300,00</p>
        </div>
    </div>
    <!--<button type="button" onclick="window.location.href='logout.php'">Logout</button>-->




</body>

</html>