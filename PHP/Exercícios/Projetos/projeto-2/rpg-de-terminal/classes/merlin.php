<?php
require_once(__DIR__ . '/personagem.php');

class Merlin extends Personagem
{

    public function __construct()
    {
        parent::__construct(
            nome: "Merlin",
            pontosDeVida: 700,
            pontosDeAtaque: 210,
            pontosDeDefesa: 130,
        );
    }

    public function especial(Personagem $oponente): void
    {
        if ($this->getPontosDeEnergia() >= 200) {
            $dano = max(50, ($this->getPontosDeAtaque() * 0.8) - ($oponente->getPontosDeDefesa() / 2));
            $oponente->setPontosDeVida($oponente->getPontosDeVida() - $dano);

            $oponente->aplicarEfeito(Efeito::Deterioracao, 40, 3);
            $this->aplicarEfeito(Efeito::Regeneracao, 40, 2);
            
            $this->setPontosDeEnergia(0);
        }
    }

    public function carregarEspecial(): void {
        $this->setPontosDeEnergia(min($this->getPontosDeEnergia()+100, $this->getEnergiaMaxima()));
    }

    public function descricao(): string
    {
        return
            "══════════════════════════════════════════════\n" .
            "🔮 Merlin — Mago\n" .
            "══════════════════════════════════════════════\n\n" .
            "\"Já vi o fim desta batalha. Você não vai gostar.\"\n\n" .
            "Subestime-o. Ele prefere assim.\n\n" .
            "Especial: Feitiço Arcano\n" .
            "Uma explosão mágica que devasta o inimigo\n" .
            "e deixa uma maldição persistente — drenando\n" .
            "sua vitalidade a cada turno que passa.\n" .
            "══════════════════════════════════════════════\n";
    }
}
