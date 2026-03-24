<?php

require_once(__DIR__ . '/../enum/efeitos.php');

abstract class Personagem
{
    private string $nome;
    private int $pontosDeAtaque;
    private int $pontosDeVida;
    private int $vidaMaxima;
    private int $pontosDeDefesa;
    private int $pontosDeEnergia = 0;

    private int $ataqueExtra = 0;
    private int $defesaExtra = 0;

    private const ENERGIA_MAX = 200;

    private array $efeitos;

    public function __construct(
        string $nome,
        int $pontosDeAtaque,
        int $pontosDeVida,
        int $pontosDeDefesa
    ) {
        $this->nome           = $nome;
        $this->pontosDeAtaque = $pontosDeAtaque;
        $this->pontosDeVida   = $pontosDeVida;
        $this->vidaMaxima     = $pontosDeVida;
        $this->pontosDeDefesa = $pontosDeDefesa;
        $this->efeitos        = [];
    }

    abstract public function especial(Personagem $oponente): void;
    abstract public function descricao(): string;
    abstract public function carregarEspecial(): void;

    //AÇÕES

    public function atacar(Personagem $oponente): void
    {
        $defesaTotal = max(0, $oponente->getPontosDeDefesa());

        $dano = max(
            1,
            $this->getPontosDeAtaque() - ($defesaTotal / 1.5)
        );

        $oponente->setPontosDeVida(
            $oponente->getPontosDeVida() - $dano
        );

        $this->setPontosDeEnergia(
            $this->getPontosDeEnergia() + 10
        );
    }

    public function defender(): void
    {
        $this->aplicarEfeito(Efeito::BuffDefesa, 50, 1);
    }

    public function aplicarEfeito(Efeito $tipo, int $valor, int $turnos): void
    {
        $this->efeitos[] = [
            'tipo'     => $tipo,
            'valor'    => $valor,
            'turnos'   => $turnos,
            'aplicado' => false
        ];
    }

    public function processarEfeitos(): void
    {
        foreach ($this->efeitos as $indice => &$efeito) {

            if (!$efeito['aplicado']) {

                match ($efeito['tipo']) {
                    Efeito::BuffAtaque   => $this->ataqueExtra += $efeito['valor'],
                    Efeito::DebuffAtaque => $this->ataqueExtra -= $efeito['valor'],
                    Efeito::BuffDefesa   => $this->defesaExtra += $efeito['valor'],
                    Efeito::DebuffDefesa => $this->defesaExtra -= $efeito['valor'],
                    default => null
                };

                $efeito['aplicado'] = true;
            }

            match ($efeito['tipo']) {
                Efeito::Regeneracao  => $this->setPontosDeVida(
                    $this->getPontosDeVida() + $efeito['valor']
                ),
                Efeito::Deterioracao => $this->setPontosDeVida(
                    $this->getPontosDeVida() - $efeito['valor']
                ),
                default => null
            };

            $efeito['turnos']--;

            if ($efeito['turnos'] <= 0) {

                if ($efeito['tipo'] === Efeito::BuffAtaque) {
                    $this->ataqueExtra -= $efeito['valor'];
                }

                if ($efeito['tipo'] === Efeito::DebuffAtaque) {
                    $this->ataqueExtra += $efeito['valor'];
                }

                if ($efeito['tipo'] === Efeito::BuffDefesa) {
                    $this->defesaExtra -= $efeito['valor'];
                }

                if ($efeito['tipo'] === Efeito::DebuffDefesa) {
                    $this->defesaExtra += $efeito['valor'];
                }

                unset($this->efeitos[$indice]);
            }
        }

        unset($efeito);
    }

    //GETTERS

    public function getNome(): string { return $this->nome; }

    public function getPontosDeAtaque(): int
    {
        return $this->pontosDeAtaque + $this->ataqueExtra;
    }

    public function getPontosDeVida(): int { return $this->pontosDeVida; }

    public function getVidaMaxima(): int { return $this->vidaMaxima; }

    public function getPontosDeDefesa(): int
    {
        return max(0, $this->pontosDeDefesa + $this->defesaExtra);
    }

    public function getAtaqueExtra(): int { return $this->ataqueExtra; }

    public function getDefesaExtra(): int { return $this->defesaExtra; }

    public function getEnergiaMaxima(): int { return self::ENERGIA_MAX; }

    public function getEfeitos(): array { return $this->efeitos; }

    public function getPontosDeEnergia(): int { return $this->pontosDeEnergia; }

    //SETTERS

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setPontosDeAtaque(int $valor): void
    {
        $this->pontosDeAtaque = max(0, $valor);
    }

    public function setPontosDeVida(int $valor): void
    {
        $this->pontosDeVida = max(
            0,
            min($valor, $this->vidaMaxima)
        );
    }

    public function setPontosDeDefesa(int $valor): void
    {
        $this->pontosDeDefesa = max(0, $valor);
    }

    public function setVidaMaxima(int $valor): void
    {
        $this->vidaMaxima = max(1, $valor);

        if ($this->pontosDeVida > $this->vidaMaxima) {
            $this->pontosDeVida = $this->vidaMaxima;
        }
    }

    public function setPontosDeEnergia(int $valor): void
    {
        $this->pontosDeEnergia = max(
            0,
            min($valor, self::ENERGIA_MAX)
        );
    }
}