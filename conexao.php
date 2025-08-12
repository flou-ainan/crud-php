<?php 
define('HOST', 'localhost');
define('USUARIO', 'phpcrud');
define('SENHA', '2323');
define('DB', 'php_crud');
define('PORT', '3306');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORT) or 
die ('Não foi possível conectar: ' . mysqli_connect_error());
?>