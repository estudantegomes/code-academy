<?php
require_once(__DIR__ . '/personagem.php');

class Berserker extends Personagem
{

    public function __construct()
    {
        parent::__construct(
            nome: "Berzerker",
            pontosDeVida: 880,
            pontosDeAtaque: 150,
            pontosDeDefesa: 180,
        );
    }

    public function especial(Personagem $oponente): void
    {
        if ($this->getPontosDeEnergia() >= 200) {
            $this->aplicarEfeito(Efeito::BuffAtaque, 30, 2);
            $this->aplicarEfeito(Efeito::DebuffDefesa, 5, 2);
            $this->atacar($oponente);

            $this->setPontosDeEnergia(0);
        }
    }

    public function carregarEspecial(): void
    {
        $this->setPontosDeEnergia(min($this->getPontosDeEnergia() + 40, $this->getEnergiaMaxima()));
    }

    public function descricao(): string
    {
        return
            "══════════════════════════════════════════════\n" .
            "⚔️  Berzerker — Guerreiro\n" .
            "══════════════════════════════════════════════\n\n" .
            "\"A dor é combustível. Quanto mais sangue, mais fúria.\"\n\n" .
            "Um guerreiro colossal forjado em batalhas sem fim.\n" .
            "Não conhece recuo, não conhece medo.\n\n" .
            "Especial: Fúria Berzerker\n" .
            "Aumenta o ataque permanentemente até o fim do combate,\n" .
            "transformando cada golpe em um verdadeiro terremoto.\n" .
            "══════════════════════════════════════════════\n";
    }
}
