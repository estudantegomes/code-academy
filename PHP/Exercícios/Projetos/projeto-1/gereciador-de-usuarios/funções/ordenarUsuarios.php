<?php
function ordenarUsuarios(array $usuarios): void
{
    usort($usuarios, function ($a, $b) {
        return $a['Nome'] <=> $b['Nome'];
    });
}
?>