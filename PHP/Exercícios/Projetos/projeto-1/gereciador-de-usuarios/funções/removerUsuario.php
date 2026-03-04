<?php
function removerUsuario(array &$usuarios, int $indice): bool
{
    if (!isset($usuarios[$indice])) {
        return false;
    }

    unset($usuarios[$indice]);
    $usuarios = array_values($usuarios);

    return true;
}

?>