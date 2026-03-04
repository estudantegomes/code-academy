<?php
function estatisticas(array $usuarios): void
{
    $total = count($usuarios);

    $admins = count(array_filter($usuarios, function ($usuario) {
        return $usuario["Admin"] === true;
    }));

    $usuariosComuns = $total - $admins;

    $percentualAdmins = $total > 0
        ? round(($admins / $total) * 100, 2)
        : 0;


    echo "\n==========================================\n";
    echo "               ESTATÍSTICAS               \n";
    echo "==========================================\n";
    printf("%-25s: %s\n", "Total de Usuarios", $total);
    printf("%-25s: %s\n", "Total de Admins", $admins);
    printf("%-25s: %s\n", "Total de Comuns", $usuariosComuns);
    printf("%-25s: %s%%\n", "Percentual de Admins", $percentualAdmins);
    echo "==========================================\n";
}

?>