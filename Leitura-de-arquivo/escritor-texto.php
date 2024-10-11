<?php

//EstudandoOpaaaaaaa

$arquivo = fopen('texto.txt','a');

$curso = "\nOpa mais que Legal";

$novoArquivo = fwrite($arquivo,$curso);

echo $novoArquivo;

fclose($arquivo);