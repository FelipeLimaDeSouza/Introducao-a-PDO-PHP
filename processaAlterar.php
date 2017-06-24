<?php 

	/*echo '<pre>';
	print_r($_POST);
	echo '</pre>';*/

	require_once 'Conexao.php';
	require_once 'CRUDAluno.php';

	$codigo = $_POST['codigo'];
	$nome = $_POST['txt_nome'];
	$sobrenome = $_POST['txt_sobrenome'];
	$idade = $_POST['txt_idade'];
	$email = $_POST['txt_email'];
	$telefone = $_POST['txt_telefone'];

	$crud = new CRUDAluno(Conexao::getInstance());

	$crud->alterar($nome, $sobrenome, $idade, $email, $telefone, $codigo);

	header('location:listaraluno.php');

?>