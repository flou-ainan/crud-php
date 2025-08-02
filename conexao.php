<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'phpcrud');
define('SENHA', '2323');
define('DB', 'php_crud');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or 
die ('Não foi possível conectar');
?>