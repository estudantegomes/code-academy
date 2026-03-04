<?php
include_once('ordenarUsuarios.php');

function cadastrarUsuario(array &$usuarios, string $nome, string $email, string $senha, bool $admin): void
{
    static $id = 1;
    array_push($usuarios, array(
        "ID" => $id++,
        "Nome" => $nome,
        "E-mail" => $email,
        "Senha" => password_hash($senha, PASSWORD_DEFAULT),
        "Admin" => $admin
    ));

    ordenarUsuarios($usuarios);
}

