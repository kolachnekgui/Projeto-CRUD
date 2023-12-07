<?php


session_start();



$_SESSION['usuario'] = 'gui';
$_SESSION['contador']++;


echo '<pre>';
print_r($_SESSION);