<?php
define('HOST', '127.0.0.1');
define('USER', 'jonas');
define('PASS', 'Jonas963@');
define('DB', 'testes');

$error = " <h1>We can't conect to database :/ .</h1> ";

$conection = mysqli_connect(HOST, USER, PASS, DB) or die ($error);