
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

            require_once 'Conexao.php';
            require_once 'CRUDAluno.php';
            require_once 'menu.php';

            $crud = new CRUDAluno(Conexao::getInstance());

          ?>

          <div class="dados">NOME</div>
          <div class="dados">SOBRENOME</div>
          <div class="dados">IDADE</div>
          <div class="dados">E-MAIL</div>
          <div class="dados">TELEFONE</div>
          <div class="dados">EDITAR</div>


          <?php

            $dados = $crud->selecionar();

            foreach ($dados as $reg) {


          ?>

           <br>

           <div class="clear"></div>

           <div class="dados"><?php echo $reg->NOME; ?></div>
           <div class="dados"><?php echo $reg->SOBRENOME; ?></div>
           <div class="dados"><?php echo $reg->IDADE; ?></div>
           <div class="dados"><?php echo $reg->EMAIL; ?></div>
           <div class="dados"><?php echo $reg->TELEFONE; ?></div>
           <div class="dados">

             <a href="formAlterar.php?cod=<?php echo $reg->COD_ALUNO; ?>">ALTERAR</a>
             |
             <a href="processaExcluir.php?cod=<?php echo $reg->COD_ALUNO; ?>">EXCLUIR</a>

           </div>

           <?php } ?>

        </div>

    </body>

</html>
