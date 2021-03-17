<?php
//Conexão com o BD
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'db_empresas');


$conn = mysqli_connect(HOST, USUARIO, SENHA, DB);