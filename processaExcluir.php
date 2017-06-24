<?php

	require_once 'Conexao.php';
	require_once 'CRUDAluno.php';

	$codigo = $_GET['cod'];

	$crud = new CRUDAluno(Conexao::getInstance());

	$crud->excluir($codigo);

	header('location:listarAluno.php');

?>