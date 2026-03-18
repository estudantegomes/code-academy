<?php
//funções
require_once(__DIR__ . "/funções/criarPersonagem.php");
require_once(__DIR__ . "/funções/iniciarCombate.php");
require_once(__DIR__ . "/funções/pausar.php");
require_once(__DIR__ . "/funções/listarPersonagens.php");
require_once(__DIR__ . "/funções/listarMenu.php");

//classes
spl_autoload_register(function ($classe) {
    require_once __DIR__ . "/../classes/$classe.php";
});

while (true) {
    listarMenu();
    echo "\n\nSelecione uma opção: ";
    $opcao = (int)fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "Você escolheu arcade!";
            break;

        case 2:
            system('clear');
            echo "Você escolheu versus!\n";

            listarPersonagens();
            echo "Jogador 1\nEscolha seu personagem: ";
            $opcao = (int)fgets(STDIN);
            $jogador1 = criarPersonagem($opcao);

            system('clear');
            echo "Jogador 1 escolheu {$jogador1->getNome()}!\n{$jogador1->descricao()}";
            pausar();
            
            system('clear');

            echo "\n1 - Berserker\n2 - Brazuka\n3 - Galadriel\n4 - Merlin\n\nPlayer 2 - Escolha um personagem: ";

            $opcao = (int)fgets(STDIN);
            $jogador2 = criarPersonagem($opcao);

            system('clear');
            echo "Player 2 escolheu {$jogador2->getNome()}!\n{$jogador2->descricao()}";

            pausar();

            iniciarCombate($jogador1, $jogador2);

            break;

        case 3:
            echo "Você escolheu sair!\n";
            return;

        default:
            echo "Opção inválida!";
            pausar();
    }
}
