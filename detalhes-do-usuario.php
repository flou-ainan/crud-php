<?php
require 'conexao.php';
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuários - Detalhes</title>
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
              Detalhes do Usuário
              <a href="/" class="btn float-end text-light"
                style="background-color: cadetblue;">
                Voltar
              </a>
            </h4>
          </div>
          <div class="card-body">
            <?php
            if (isset($_GET['id'])) {
              $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
              $query_sql = "SELECT * FROM usuarios WHERE id='$usuario_id'";
              $consulta = mysqli_query($conexao, $query_sql);
              if (mysqli_num_rows($consulta) > 0) {
                $usuario = mysqli_fetch_array($consulta);
            ?>
                <script>
                  document.title = 'Usuários | Detalhes de <?= htmlspecialchars($usuario['nome']) ?>';
                </script>

                <div class="mb-3">
                  <label>Nome</label>
                  <p class="form-control">
                    <?= $usuario['nome']; ?>
                  </p>
                </div>
                <div class="mb-3">
                  <label>Email</label>
                  <p class="form-control">
                    <?= $usuario['email']; ?>
                  </p>
                </div>
                <div class="mb-3">
                  <label>Data de nascimento</label>
                  <p class="form-control">
                    <?= date('d/m/Y', strtotime($usuario['data_de_nascimento'])); ?>
                  </p>
                </div>
            <?php
              } else {
                echo "<h5>Usuario não encontrado</h5>";
              }
            }
            ?>

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