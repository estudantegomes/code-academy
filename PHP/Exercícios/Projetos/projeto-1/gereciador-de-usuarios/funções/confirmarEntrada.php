<?php

function confirmarEntrada(string $mensagem): string
{
    while (true) {
        echo "\n". $mensagem;
        $entrada = trim(fgets(STDIN));

        echo "Confirme: ";
        $confirmacao = trim(fgets(STDIN));

        if ($entrada === $confirmacao) {
            return $entrada;
        }

        echo "Dados não coincidem. Tente novamente.\n";
    }
}

?>