<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

echo "Nome: $nome";
echo "Nome: $email";

$result_usuario = "INSERT INTO usuarios (nome, email) VALUES('$nome', '$email')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: painel.php");
    }else{
    $_SESSION['msg'] = "Usuário não foi cadastrado com sucesso";
    header("Location: index.php");
    }
?>