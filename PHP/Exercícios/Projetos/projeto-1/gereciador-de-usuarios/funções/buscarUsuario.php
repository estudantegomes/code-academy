<?php
function buscarUsuario(array $usuarios, string $termo): array
{
    $resultado = [];

    foreach ($usuarios as $usuario) {
        if (stripos($usuario["Nome"], $termo) !== false) {
            array_push($resultado, $usuario);
        }
    }

    foreach ($resultado as $usuario) {
        echo "\n" . $usuario["Nome"] . " (ID:{$usuario["ID"]})";
    }

    if ($resultado == []) {
        echo "\nNão há usuários com esse nome.\n";
    }

    return $resultado;
}

?>