<?php
require_once(__DIR__ . '/personagem.php');

class Galadriel extends Personagem
{

    public function __construct()
    {
        parent::__construct(
            nome: "Galadriel",
            pontosDeVida: 780,
            pontosDeAtaque: 200,
            pontosDeDefesa: 150,
        );
    }

    public function especial(Personagem $oponente): void
    {   
        if($this->getPontosDeEnergia() >= 200){
            $this->setPontosDeVida($this->getPontosDeVida()+150);
            $this->aplicarEfeito(Efeito::Regeneracao, 40, 3);

            $this->setPontosDeEnergia(0);
        }
    }
    
    public function carregarEspecial(): void {
        $this->setPontosDeEnergia(min($this->getPontosDeEnergia()+65, $this->getEnergiaMaxima()));
    }

    public function descricao(): string
    {
        return 
            "══════════════════════════════════════════════\n" .
            "🌿 Galadriel — Elfa\n" .
            "══════════════════════════════════════════════\n\n" .
            "\"A floresta não ataca. Ela consome.\"\n\n" .
            "Uma elfa ancestral de beleza etérea e\n" .
            "olhar capaz de atravessar almas.\n\n" .
            "Sua ligação com a natureza permite\n" .
            "que a própria floresta a proteja e\n" .
            "restaure suas forças em batalha.\n\n" .
            "Especial: Cura da Floresta\n" .
            "Restaura instantaneamente parte\n" .
            "de sua vida e ativa uma regeneração\n" .
            "contínua por alguns turnos.\n" .
            "══════════════════════════════════════════════\n";
    }
}
