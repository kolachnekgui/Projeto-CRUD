<?php
//inicia uma sessao
session_start();
//destroi
session_destroy();

//mostra a sessao
echo '<pre>';
print_r($_SESSION);