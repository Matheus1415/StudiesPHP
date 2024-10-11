<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'DELETE',
        'headers' => 'X-fom: PHP'
    ]
]);

echo file_get_contents('http:/httpbin.org/get', false, $contexto);
