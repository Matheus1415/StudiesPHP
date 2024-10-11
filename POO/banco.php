<?php

// use POO\Modelo\Conta\ContaCorrente;
// use POO\Modelo\Conta\ContaPoupanca;
use Poo\Modelo\Conta\{ContaCorrente,ContaPoupanca};

spl_autoload_register(function(string $nomeCompletoDaClasse){
    
    // Remova 'POO\\Modelo\\' do caminho do arquivo
    $caminhoArquivo = str_replace('POO\\Modelo\\', '', $nomeCompletoDaClasse);
    // Adicione a extensão '.php' ao caminho do arquivo
    $caminhoArquivo .= '.php';

    // Substitua todas as barras invertidas '\' por barras normais '/' no caminho do arquivo
    $caminhoArquivo = str_replace('\\', '/', $caminhoArquivo);

    //Verifica se o caminho ate o arquivo existe
    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
    echo $caminhoArquivo;
});


$contaNova = new ContaCorrente('003.000.000-23','Matheus');
