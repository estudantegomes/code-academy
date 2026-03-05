<?php
function verificarSenha(string $hash): bool
{
    echo "\nDigite a senha atual: ";
    $entrada = trim(fgets(STDIN));

    return password_verify($entrada, $hash);
}
?>