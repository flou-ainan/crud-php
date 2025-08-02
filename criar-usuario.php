<?php
require 'conexao.php';
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
  <?php include('navbar.php') ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card mx-auto" style="max-width: 700px;">
          <div class="card-header">
            <h4>
              Adicionar usuário
                <a href="/" class="btn float-end text-light" 
                style="background-color: cadetblue;">
                  Voltar
                </a>
            </h4>
          </div>
          <div class="card-body">
            <form action="acoes.php" method="POST">
              <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
              </div>
              <div class="mb-3">
                <label>Data de nascimento</label>
                <input type="date" name="data_de_nascimento" class="form-control">
              </div>
              <div class="mb-3">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
              </div>
              <div class="mb-3">
                <button type="submit" name="criar_usuario"
                class="btn btn-success mx-auto d-block px-4 text-center">Criar</button>
              </div>
            </form>
          </div>
        </div>
      <div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
  </script>
</body>

</html>