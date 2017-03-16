<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#252A2F" style="margin:0; padding:0;">
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
$ddd	= $_POST ["ddd"];	//atribuição do campo "ddd" vindo do formulário para variavel
$tel	= $_POST ["telefone"];	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco	= $_POST ["endereco"];	//atribuição do campo "endereco" vindo do formulário para variavel
$cidade	= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado	= $_POST ["estado"];	//atribuição do campo "estado" vindo do formulário para variavel
$cpf = $_POST ["cpf"];	//atribuição do campo "bairro" vindo do formulário para variavel
$resposta	= $_POST ["resposta"];	//atribuição do campo "pais" vindo do formulário para variavel
$aceito	= $_POST ["aceito"];	//atribuição do campo "news" vindo do formulário para variavel
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","USUARIO_DO_BANCO","SENHA_DO_BANCO");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("NOME_DO_BANCO",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



$query = "INSERT INTO `clientes` ( `nome` , `email` , `ddd` , `telefone` , `endereco` , `cidade` , `estado` , `cpf` , `resposta` , `aceito` , `id` ) 
VALUES ('$nome', '$email', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$cpf', '$resposta', '$aceito', '')";

mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 
</body>
</html>
