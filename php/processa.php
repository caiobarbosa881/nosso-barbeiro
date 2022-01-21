<?php
session_start();
include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

echo "Nome: $email";

$result_usuario = "INSERT INTO usuarios (email, senha) VALUES('$email', '$senha')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: painel.php");
    }else{
    $_SESSION['msg'] = "Usuário não foi cadastrado com sucesso";
    header("Location: index.php");
    }
?>