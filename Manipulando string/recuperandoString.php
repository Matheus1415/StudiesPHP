<?php
$nome = "Matheus pereira";
$email = 'matheus@gmail.com';
$senha = '123';

// echo $senha[0]."</br>";

//Conata quantos caractere existe
$totalCaracetereSenha = mb_strlen($senha);
// echo $totalCaracetereSenha;

//Recorta a partide do segundo valor
$posicaoDoArroba = strpos($email, '@');

//varieavel, qual caractere começa, qual caractere termina
/////////////////////////////////////////////////////////////////////////////////////////////

$usuario = substr($email,0 ,$posicaoDoArroba);

echo mb_strtoupper($usuario);

list($nome, $sobreNome) = explode(' ', $nome);

echo "</br> Nome: $nome | Sobrenome: $sobreNome";