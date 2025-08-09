<?php 
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'php_crud');
define('PORT', '3306');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORT) or 
die ('Não foi possível conectar: ' . mysqli_connect_error());
?>