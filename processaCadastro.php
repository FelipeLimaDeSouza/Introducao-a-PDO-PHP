<?php

  require_once 'Conexao.php';
  require_once 'CRUDAluno.php';


  $crud = new CRUDAluno(Conexao::getInstance());

  $nome = $_POST['txt_nome'];
  $sobrenome = $_POST['txt_sobrenome'];
  $idade = $_POST['txt_idade'];
  $email = $_POST['txt_email'];
  $telefone = $_POST['txt_telefone'];

  $crud->inserir($nome, $sobrenome, $idade, $email, $telefone);

  header('location:listarAluno.php');

 ?>
