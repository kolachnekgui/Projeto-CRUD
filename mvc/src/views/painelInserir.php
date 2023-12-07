<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="../controller/inserir.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required><br><br>

        <label for="data_de_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_de_nascimento" name="data_de_nascimento" required><br><br>

        <label for="e_mail">Email:</label>
        <input type="email" id="e_mail" name="e_mail" required><br><br>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" required><br><br>

        <label for="endereco">Endereco:</label>
        <input type="text" id="endereco" name="endereco" required><br><br>


        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Enviar">
       
    </form>
    
</body>
</html>
