<?php

spl_autoload_register(function ($classe) {
    require_once dirname(__DIR__) . "/classes/" . strtolower($classe) . ".php";
});

function criarPersonagem(int $opcao): ?Personagem
{
        return match ($opcao) {
        1 => new Berserker(),
        2 => new Brazuka(),
        3 => new Galadriel(),
        4 => new Merlin(),
        default => null
    };
}
