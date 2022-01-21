<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
  
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falhana execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content=IE-edge>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="form-container">
    <form class="form" action="" method="POST">
        <h2>Bem vindo</h2>
        <label class="field field_v3">
    <input type="text" name="email" class="field__input" placeholder="Digite seu e-mail">
    <span class="field__label-wrap">
      <span class="field__label">E-mail</span>
    </span>
  </label>
    <label class="field field_v3">
    <input type="password" name="senha" class="field__input inputs" placeholder="Digite sua senha">
    <span class="field__label-wrap">
      <span class="field__label">Senha</span>
    </span>
  </label>    
        <button class="form-button" type="submit">LOGAR</button>
        <p class="cadastrar-p">
        você não tem uma conta ainda?<a class="cadastrar-a" href=""> Cadastrar-se</a>
        </p>
    </form>
</div>
</body>
</html>