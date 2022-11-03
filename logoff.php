<?php

session_start();


session_destroy();
$_SESSION['autenticado'] = 'NÃO';
header('Location: index.php');


?>