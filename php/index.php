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
        <h1>Faça seu Login</h1>
        <p>
        <input type="text" name="email" placeholder="E-mail">
        </p>
        
        <p>
        <input type="password" name="senha" placeholder="Senha">
        </p>
        <p>
        <button class="form-button" type="submit">LOGAR</button>
        </p>
        <p>
        você não tem uma conta ainda?<a class="cadastrar-a" href=""> Cadastrar-se</a>
        </p>
    </form>
    </div>
</body>
</html>