<?php
define('HOST', '000.000.000.000');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', '');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('N�o foi possivel conectar');
