<?php

include_once('ordenarUsuarios.php');

enum Chave: string
{
    case nome = "Nome";
    case email = "E-mail";
    case senha = "Senha";
}

function editarUsuario(array &$usuarios, int $indice, Chave $chave, string $valor): bool
{
    if (!isset($usuarios[$indice])) {
        return false;
    }

    if ($chave === Chave::senha) {
        $usuarios[$indice][$chave->value] = password_hash($valor, PASSWORD_DEFAULT);
    } else {
        $usuarios[$indice][$chave->value] = $valor;
    }

    ordenarUsuarios($usuarios);
    return true;
}
