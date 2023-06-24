<?php
if(isset($_POST['cadastra'])){
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$check_senha = $_POST['check-senha'];
}

if($senha != $check_senha){
    die("As senhas não correspondem.");
}
$host = "localhost";
$banco = "formulárioteste";
$user = "root";
$senha_user = "";

$con = mysqli_connect($host, $user, $senha_user, $banco);

if(!$con){
    die("Conexão falhou." . mysqli_connect_error());
}

$sql = "INSERT INTO clientes(Nome, CPF , Senha) Values('$nome', '$cpf', '$senha')";

$rs = mysqli_query($con, $sql);

if($rs){
    echo "Voçê foi cadastrado com sucesso.";
}


?>