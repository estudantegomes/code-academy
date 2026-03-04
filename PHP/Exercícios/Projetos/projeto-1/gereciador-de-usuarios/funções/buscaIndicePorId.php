<?php
function buscarIndicePorId(array $usuarios, int $id): ?int
{
    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["ID"] === $id) {
            return $indice;
        }
    }
    return null;
}

?>