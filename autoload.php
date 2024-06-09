<?php

define('__ROOT__', dirname(__FILE__));

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', '\src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    var_dump(file_exists(__ROOT__ . $caminhoArquivo));
    var_dump(__ROOT__ . $caminhoArquivo);
    if (file_exists(__ROOT__ . $caminhoArquivo)) {
        require_once(__ROOT__ . $caminhoArquivo);
    }
});
