<?php

session_start();
include_once("conexao.php");

$user_nome = $_POST['user_nome'];
$user_password = MD5($_POST['user_password']);
$user_email = $_POST['user_email'];
$user_telefone = $_POST['user_telefone'];
$user_cpf = $_POST['user_cpf'];
$user_rg = $_POST['user_rg'];
$user_sangue = $_POST['user_sangue'];
$user_sexo = $_POST['user_sexo'];

$user_cep = $_POST['user_cep'];
$user_endereco = $_POST['user_endereco'];
$user_numero = $_POST['user_numero'];
$user_complemento = $_POST['user_complemento'];
$user_municipio = $_POST['user_municipio'];
$user_estado = $_POST['user_estado'];

$result_usuario = "INSERT INTO usuarios (user_nome, user_password, user_email, user_telefone, user_cpf, user_rg, user_sangue, user_sexo, user_cep, user_endereco, user_numero, user_complemento, user_municipio, user_estado, created) VALUES ('$user_nome', '$user_password', 'user_email', '$user_email', '$user_telefone', '$user_cpf', '$user_rg', '$user_sangue', '$user_sexo', '$user_cep', '$user_endereco', '$user_numero', '$user_complemento', '$user_municipio', '$user_estado', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style = 'color = green;'>Usuario Cadastrado com Sucesso!</p>";
	header("Location = cadastro.html");
}else{
	$_SESSION['msg'] = "<p style = 'color = red;'>Usuario não foi Cadastrado com Sucesso!</p>";
	header("Location = cadastro.html");
}
	





?>