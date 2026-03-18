<?php
require_once(__DIR__ . '/personagem.php');

class Brazuka extends Personagem
{

    public function __construct()
    {
        parent::__construct(
            nome: "Brazuca",
            pontosDeVida: 780,
            pontosDeAtaque: 185,
            pontosDeDefesa: 150,
        );
    }

    public function especial(Personagem $oponente): void
    {
        if ($this->getPontosDeEnergia() >= 200) {
            $oponente->aplicarEfeito(Efeito::DebuffDefesa, 70, 2);
            $this->aplicarEfeito(Efeito::BuffAtaque, 30, 1);
            $this->atacar($oponente);

            $this->setPontosDeEnergia(0);
        }
    }

    public function carregarEspecial(): void
    {
        $this->setPontosDeEnergia(min($this->getPontosDeEnergia() + 50, $this->getEnergiaMaxima()));
    }

    public function descricao(): string
    {
        return
            "══════════════════════════════════════════════\n" .
            "🇧🇷 Brazuka — Humano\n" .
            "══════════════════════════════════════════════\n\n" .
            "\"Ei mano, sem estresse! …Agora toma esse soco.\"\n\n" .
            "Mestre da malandragem e do jogo\n" .
            "psicológico. Brazuka confunde,\n" .
            "provoca e desestabiliza qualquer\n" .
            "oponente antes mesmo da luta começar.\n\n" .
            "Especial: Carisma Absurdo\n" .
            "Quebra completamente a defesa do\n" .
            "adversário, deixando-o exposto e\n" .
            "sem reação para o próximo ataque.\n" .
            "══════════════════════════════════════════════\n";
    }
}
