<?php
  class CRUDAluno{
    private $pdo = null;
    public function __construct($conexao){
      $this->pdo = $conexao;
    }
    public function inserir($nome, $sobrenome, $idade, $email, $telefone){

      try{
       $sql = "INSERT INTO tbl_aluno (nome,sobrenome,idade,email,telefone) VALUES (?, ?, ?, ?, ?)";
       $stm = $this->pdo->prepare($sql);
       $stm->bindValue(1, $nome);
       $stm->bindValue(2, $sobrenome);
       $stm->bindValue(3, $idade);
       $stm->bindValue(4, $email);
       $stm->bindValue(5, $telefone);
       $stm->execute();
       echo "<script>alert('Registro inserido com sucesso')</script>";
      }catch(PDOException $erro){
       echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
      }

    }

    public function selecionar(){

     try{

      $sql = "SELECT * FROM tbl_aluno";

      $stm = $this->pdo->prepare($sql);

      $stm->execute();

      $dados = $stm->fetchAll(PDO::FETCH_OBJ);

      return $dados;

     }catch(PDOException $erro){

      echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

     }

    }

	public function selecionarCriterio($codigo){
		try{
			$sql = "SELECT * FROM tbl_aluno WHERE cod_aluno = ?";
			$stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $codigo);

			$stm->execute();
			$dados = $stm->fetchAll(PDO::FETCH_OBJ);
			return $dados;

		}catch(PDOException $erro){

			echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

		}
	}

  public function alterar($nome,
                          $sobrenome,
                          $idade,
                          $email,
                          $telefone,
                          $codigo){
    
    try{

      $sql = "UPDATE tbl_aluno SET nome = ?,
                                 sobrenome = ?,
                                 idade = ?,
                                 email = ?,
                                 telefone = ?
      WHERE cod_aluno = ?";

      $stm = $this->pdo->prepare($sql);

      $stm->bindValue(1, $nome);
      $stm->bindValue(2, $sobrenome);
      $stm->bindValue(3, $idade);
      $stm->bindValue(4, $email);
      $stm->bindValue(5, $telefone);
      $stm->bindValue(6, $codigo);

      $stm->execute();

      echo "<script>alert('Registro alterado
            com sucesso')</script>";

    }catch(PDOException $erro){

      echo "<script>alert('Erro na linha:
      {$erro->getLine()}')</script>";

    }

  }
  public function excluir($codigo){

    try{

      $sql = "DELETE FROM tbl_aluno WHERE
            cod_aluno = ?";

      $stm = $this->pdo->prepare($sql);
			$stm->bindValue(1, $codigo);

      $stm->execute();

      echo "<script>alert('Registro excluído
            com sucesso')</script>";

    }catch(PDOException $erro){

      echo "<script>alert('Erro na linha:
      {$erro->getLine()}')</script>";

    }

  }

  }

?>
