<?php

	Class Login{

		private $pdo = null;

		public function __construct($conexao){

			$this->pdo = $conexao;

		}

		public function realizarLogin($login, $senha){

			try {

				$sql = "SELECT * FROM tbl_login WHERE login = ? AND senha = ?";

				$stm = $this->pdo->prepare($sql);

				$stm->bindValue(1, $login);
				$stm->bindValue(2, $senha);

				$stm->execute();

				$rows = $stm->rowCount();

				$dados = $stm->fetchAll(PDO::FETCH_OBJ);

				if ($rows === 1) {

					foreach ($dados as $reg) {

						$_SESSION['usuario'] = $reg->login;

					}

					$_SESSION['id'] = session_id();

					header('location:home.php');

				} else{

					session_unset();
					session_destroy();
					header('location:index.php');

				}

			} catch (PDOException $erro) {

				session_unset();
				session_destroy();

			}

		}

		function validaLogin(){

			if (($_SESSION['id'] != session_id()) || (empty($_SESSION['id']))) {

				header('location:index.php');

			}

		}

		function sairLogin(){

			session_unset();
			session_destroy();
			header('location:index.php');

		}

	}

?>
