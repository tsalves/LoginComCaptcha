<?php
/*incia a sessão*/ 
session_start();
/*conexão com banco*/ 
include_once("conexao.php");

if($_SESSION['captcha'] == $_POST['captcha']){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$result_usuario = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	$_SESSION['msg'] = "<h3 style='color:blue;'>Usuário cadastrado com sucesso<h3>";
	header("Location: form.php");
}else{
	$_SESSION['msg'] = "<h3 style='color:red;'>ERRO! Caracteres incorretos!!<h3>";
	header("Location: form.php");
}