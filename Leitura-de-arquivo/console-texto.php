<?php

$teclado = fopen('php://stdin', 'r');

$novoTexto =  fgets($teclado);
file_put_contents('texto.txt', $novoTexto, FILE_APPEND);