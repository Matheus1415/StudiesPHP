<?php
//Abre arquivo para leitura
$arquivo = fopen('texto.txt', 'r');

//Filtra o arquivo e deica tudo maiusculo
stream_filter_append($arquivo, 'string.toupper');

//abre o arquivo no caminho x
echo fread($arquivo, filesize('texto.txt'));