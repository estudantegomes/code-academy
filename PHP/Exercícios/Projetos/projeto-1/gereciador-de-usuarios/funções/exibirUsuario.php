<?php
function exibirUsuario(array $usuario): void
{
    echo "\n================================\n";
    printf("%-10s: %s\n", "ID", $usuario["ID"]);
    printf("%-10s: %s\n", "Nome", $usuario["Nome"]);
    printf("%-10s: %s\n", "E-mail", $usuario["E-mail"]);
    printf("%-10s: %s\n", "Senha", $usuario["Senha"]);
    printf("%-10s: %s\n", "Admin", $usuario["Admin"] ? "Sim" : "Não");
    echo "================================\n";
}

?>