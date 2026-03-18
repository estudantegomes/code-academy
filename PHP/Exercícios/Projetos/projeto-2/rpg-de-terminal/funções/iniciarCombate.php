<?php
require_once __DIR__ . "/pausar.php";

spl_autoload_register(function ($classe) {
    require_once dirname(__DIR__) . "/classes/" . strtolower($classe) . ".php";
});

/**
 * =========================
 * BARRA DE VIDA
 * =========================
 */
function barraDeVida(int $vidaAtual, int $vidaMaxima, int $tamanho = 16): string
{
    $percentual = $vidaMaxima > 0 ? $vidaAtual / $vidaMaxima : 0;
    $preenchido = (int)round($percentual * $tamanho);

    $cheio = str_repeat("#", $preenchido);
    $vazio = str_repeat("-", $tamanho - $preenchido);

    return "[{$cheio}{$vazio}] {$vidaAtual}/{$vidaMaxima}";
}

/**
 * =========================
 * EXIBIÇÃO INDIVIDUAL
 * =========================
 */
function exibirPersonagem(Personagem $p, int $numero): void
{
    echo "----------------------------------------\n";
    echo "Jogador {$numero} - {$p->getNome()}\n";
    echo "----------------------------------------\n";

    echo "Vida:    " . barraDeVida($p->getPontosDeVida(), $p->getVidaMaxima()) . "\n";
    echo "Ataque:  " . $p->getPontosDeAtaque() . "\n";
    echo "Defesa:  " . $p->getPontosDeDefesa() . "\n";
    echo "Energia: " . $p->getPontosDeEnergia() . "\n";
}

/**
 * =========================
 * STATUS GERAL
 * =========================
 */
function exibirStatus(Personagem $p1, Personagem $p2, int $turno, int $playerAtual): void
{
    echo "========================================\n";
    echo "              TURNO {$turno}\n";
    echo "========================================\n";

    echo "Jogador da vez: {$playerAtual}\n\n";

    exibirPersonagem($p1, 1);
    echo "\n";
    exibirPersonagem($p2, 2);

    echo "========================================\n";
}

/**
 * =========================
 * COMBATE
 * =========================
 */
function iniciarCombate(Personagem $player1, Personagem $player2): void
{
    $player = true;
    $turno  = 1;

    while ($player1->getPontosDeVida() > 0 && $player2->getPontosDeVida() > 0) {

        $atacante       = $player ? $player1 : $player2;
        $oponente       = $player ? $player2 : $player1;
        $numeroDoPlayer = $player ? 1 : 2;

        // ✔ processa efeitos apenas do jogador atual
        $atacante->processarEfeitos();

        system('clear');

        exibirStatus($player1, $player2, $turno, $numeroDoPlayer);

        echo "\nEscolha uma ação:\n";
        echo "1 - Atacar\n";
        echo "2 - Defender\n";

        if ($atacante->getPontosDeEnergia() >= 200) {
            echo "3 - Especial\n";
        }

        echo "\n> ";
        $opcao = (int)fgets(STDIN);

        switch ($opcao) {

            case 1:
                $vidaAntes = $oponente->getPontosDeVida();

                $atacante->atacar($oponente);

                $dano = $vidaAntes - $oponente->getPontosDeVida();

                echo "\n{$atacante->getNome()} causou {$dano} de dano!\n";
                break;

            case 2:
                $atacante->defender();
                echo "\n{$atacante->getNome()} entrou em modo defensivo!\n";
                break;

            case 3:
                if ($atacante->getPontosDeEnergia() < 200) {
                    echo "\nEnergia insuficiente!\n";
                } else {
                    $atacante->especial($oponente);
                    echo "\n{$atacante->getNome()} usou o ESPECIAL!\n";
                }
                break;

            default:
                echo "\nOpção inválida! Turno perdido.\n";
        }

        // ✔ energia carrega no final
        $atacante->carregarEspecial();

        pausar();

        $player = !$player;
        $turno++;
    }

    system('clear');

    $vencedor = $player1->getPontosDeVida() > 0 ? $player1 : $player2;

    echo "========================================\n";
    echo "{$vencedor->getNome()} venceu a batalha!\n";
    echo "========================================\n";
}