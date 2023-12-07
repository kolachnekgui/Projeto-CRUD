 <?php
 

include('../../lib/conexao.php');

$cep = $_POST['cep'];
$e_mail = $_POST['e_mail'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$endereco =$_POST['endereco'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];

$validar = true;

//testar os campos
if ($cep == '') {
    echo 'Informe o cep <br/>';
    $validar = false;
}
if ($e_mail == '') {
    echo 'Informe o e_mail <br/>';
    $validar = false;
}
if ($telefone  == '') {
    echo 'Informe o telefone <br/>';
    $validar = false;
}
if ($cpf == '') {
    echo 'Informe o cpf <br/>';
    $validar = false;
}

if ($data_de_nascimento== '') {
    echo 'Informe o data_de_nascimento <br/>';
    $validar = false;
}
if ($endereco == '') {
    echo 'Informe o endereco <br/>';
    $validar = false;
}
if ($nome == '') {
    echo 'Informe o nome <br/>';
    $validar = false;
}
if ($senha == '') {
    echo 'Informe o senha <br/>';
    $validar = false;
}






if ($validar == true) {
    $sql = "insert into CADASTRO_DE_USUARIO (cep, e_mail, telefone, cpf, data_de_nascimento, endereco,nome,senha) 
    values ({$cep}, '{$e_mail}',{$telefone },{$cpf},'{$data_de_nascimento}','{$endereco}','{$nome}',{$senha});";

    if (mysqli_query($conexao, $sql)) {
        echo 'Inserido com sucesso';
    } else {
        echo 'Erro ao inserir';
        
    }


}
 


