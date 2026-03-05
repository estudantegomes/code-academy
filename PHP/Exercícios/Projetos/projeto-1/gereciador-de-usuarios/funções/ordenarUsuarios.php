<?php
function ordenarUsuarios(array &$usuarios): void
{
    $n = count($usuarios);

    for ($i = 0; $i < $n - 1; $i++) {

        $trocou = false;

        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($usuarios[$j]['Nome'] > $usuarios[$j + 1]['Nome']) {

                $temp = $usuarios[$j];
                $usuarios[$j] = $usuarios[$j + 1];
                $usuarios[$j + 1] = $temp;

                $trocou = true;
            }
        }

        if (!$trocou) {
            break;
        }
    }
}
?>