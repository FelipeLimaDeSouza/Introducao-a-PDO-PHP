
<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilo.css">
        <title>TPI-1 - PHP</title>

    </head>

    <body>

        <div class="container sombra">

            <div class="topo"><img src="imagens/topo_etec.jpg"></div>

            <?php

              require_once 'menu.php';
              require_once 'Conexao.php';
              require_once 'CRUDAluno.php';

              $crud = new CRUDAluno(Conexao::getInstance());

              $codigo = $_GET['cod'];

              $dados = $crud->selecionarCriterio($codigo);

              foreach ($dados as $reg) {

            ?>

            <div class="content_titulo">ALTERAR ALUNOS</div>

            <div class="content">

              <form action="processaAlterar.php" method="POST">

                  <input type="hidden" name="codigo" value="<?php echo $reg->COD_ALUNO; ?>">
                  <label>NOME: </label>
                  <input type="text" name="txt_nome" value="<?php echo $reg->NOME; ?>">

                  <br><br>

                  <label>SOBRENOME: </label>
                  <input type="text" name="txt_sobrenome" value="<?php echo $reg->SOBRENOME; ?>">

                  <br><br>

                  <label>IDADE: </label>
                  <input type="text" name="txt_idade" value="<?php echo $reg->IDADE; ?>">

                  <br><br>

                  <label>E-MAIL: </label>
                  <input type="text" name="txt_email" value="<?php echo $reg->EMAIL; ?>">

                  <br><br>

                  <label>TELEFONE: </label>
                  <input type="text" name="txt_telefone" value="<?php echo $reg->TELEFONE; ?>">

                  <br><br>

                  <input type="submit" value="ALTERAR">

              </form>

            </div>

            <?php }?>

        </div>

    </body>

</html>
