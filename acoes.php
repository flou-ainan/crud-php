<?php
session_start();
require('conexao.php');
if (isset($_POST['criar_usuario'])) {
  $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
  $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
  $data_de_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));
  $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']),PASSWORD_DEFAULT)) : '';

  $sql_insereUsuario = "INSERT INTO usuarios (nome, email, data_de_nascimento, senha)
          VALUES ('$nome', '$email', '$data_de_nascimento', '$senha')";

  mysqli_query($conexao, $sql_insereUsuario);

  if (mysqli_affected_rows($conexao) > 0) {
    $_SESSION['[mensagem]'] = 'Usuário criado com sucesso';
    header('Location: index.php');
    exit;
  } else {
    $_SESSION['[mensagem]'] = 'Usuário não cadastrado';
    header('Location: index.php');
    exit;
  }
}
?>