<?php

	session_start();

	require_once 'Conexao.php';
	require_once 'Login.php';

	$login = new Login(Conexao::getInstance());
	$login->sairLogin();

?>