
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

            ?>

            <div class="content_titulo">CADASTRO DE ALUNOS</div>

            <div class="content">

              <form action="processaCadastro.php" method="POST">

                  <label>NOME: </label>
                  <input type="text" name="txt_nome">

                  <br><br>

                  <label>SOBRENOME: </label>
                  <input type="text" name="txt_sobrenome">

                  <br><br>

                  <label>IDADE: </label>
                  <input type="text" name="txt_idade">

                  <br><br>

                  <label>E-MAIL: </label>
                  <input type="text" name="txt_email">

                  <br><br>

                  <label>TELEFONE: </label>
                  <input type="text" name="txt_telefone">

                  <br><br>

                  <input type="submit" value="CADASTRAR">

              </form>

            </div>

        </div>

    </body>

</html>
