<?php
session_start();
require('conexao.php');

// rota para criação de novos usuários
if (isset($_POST['criar_usuario'])) {
  $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
  $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
  $data_de_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));
  $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

  $sql_insereUsuario = "INSERT INTO usuarios (nome, email, data_de_nascimento, senha)
          VALUES ('$nome', '$email', '$data_de_nascimento', '$senha')";

  mysqli_query($conexao, $sql_insereUsuario);

  if (mysqli_affected_rows($conexao) > 0) {
    $_SESSION['mensagem'] = 'Usuário criado com sucesso';
    header('Location: index.php');
    exit;
  } else {
    $_SESSION['mensagem'] = 'Usuário não cadastrado';
    header('Location: index.php');
    exit;
  }
}

// Rota para editar dados do usuário
if (isset($_POST['editar_usuario'])) {
  $id_do_usuario = mysqli_real_escape_string($conexao, trim($_POST['id_do_usuario']));
  $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
  $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
  $data_de_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_de_nascimento']));
  $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
  $sql_editaUsuario = "UPDATE usuarios SET nome = '$nome',  email='$email', data_de_nascimento='$data_de_nascimento'";
  if(!empty($senha)){
    $senhaEncriptada = password_hash(trim($senha), PASSWORD_DEFAULT);
    $sql_editaUsuario .=  ", senha = '$senhaEncriptada'" ;
  }

  $sql_editaUsuario .= "WHERE id='$id_do_usuario'";
  mysqli_query($conexao, $sql_editaUsuario);
  if (mysqli_affected_rows($conexao) > 0) {
    $_SESSION['mensagem'] = 'Usuário editado com sucesso';
    header('Location: index.php');
    exit;
  } else {
    $_SESSION['mensagem'] = 'Usuário não cadastrado';
    header('Location: index.php');
    exit;
  }
}
?>