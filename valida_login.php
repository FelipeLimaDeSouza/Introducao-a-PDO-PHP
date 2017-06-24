<?php

	session_start();

	require_once 'Conexao.php';
	require_once 'Login.php';

	$usuario = $_POST['txt_login'];
	$senha = $_POST['txt_senha'];

	$login = new Login(Conexao::getInstance());
	$login->realizarLogin($usuario, $senha);

?>