<?php

function funcao1()
{
    echo 'Entrei na função 1 </br>';
    try {
        funcao2();

    } catch (Exception $erro) {
        echo 'Deu o erro "'.$erro->getMessage().'" na linha '.$erro->getLine().' do programa </br>';
        throw new RuntimeException(
            'Eceção foi tratada com sucesso',
            1,
            $erro
        );
    }
    // $divisao = intdiv(5, 0);
    echo 'Saindo da função 1 </br>';
}

function funcao2()
{
    echo 'Entrei na função 2 </br>' ;
    $exepetion = new RuntimeException();
    throw $exepetion;

    echo 'Saindo da função 2 </br>' ;
}


try {
    echo 'Iniciando o programa principal </br>';
    funcao1();
    echo 'Finalizando o programa principal </br>';

} catch (RuntimeException $erro) {
    echo 'Deu o erro "'.$erro->getMessage().'" na linha '.$erro->getLine().' do programa </br>';
   
}