<?php

function listarUsuarios(array &$usuarios): void
{
    if (empty($usuarios)) {
        echo "\nNenhum usuário cadastrado.\n";
        return;
    }

    foreach ($usuarios as $usuario) {
        echo "\n{$usuario["Nome"]} (ID:{$usuario["ID"]})";
    }

    echo "\n";
}

?>