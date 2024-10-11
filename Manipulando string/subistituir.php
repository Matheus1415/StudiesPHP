<?php

$texto = 'Texto de qualquer coisa poxa e caramba';

$texto = str_replace(
    ['poxa','caramba'],
    '***',
    $texto
);

echo $texto;