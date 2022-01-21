<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content=IE-edge>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    </head>
    <body>
        <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
        ?>

        <div class="form-container">
    <form class="form" action="processa.php" method="POST">
        <h2>Faça seu Cadastro</h2>
        <label class="field field_v3">
    <input type="email" name="email" class="field__input" placeholder="Digite um e-mail">
    <span class="field__label-wrap">
      <span class="field__label">Nome</span>
    </span>
  </label>
    <label class="field field_v3">
    <input type="password" name="senha" class="field__input inputs" placeholder="Digite uma senha">
    <span class="field__label-wrap">
      <span class="field__label">Senha</span>
    </span>
  </label>    
        <button class="form-button" value="Cadastrar" type="submit">CADASTRAR-SE</button>
    </form>
</div>




    </body>
</html>