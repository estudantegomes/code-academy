<?php
/*
Exercício 2
Modele a interação de pessoas cumprimentando-se. Cada pessoa é representada unicamente pelo
primeiro nome. Em termos de modelagem e implementação, uma pessoa pode cumprimentar outra
de três maneiras: sem saber o nome; sabendo apenas nome (passado como parâmetro); ou
conhecendo a outra pessoa (tendo outro objeto passado como parâmetro). No primeiro caso, o
cumprimento será apenas “Olá!”, enquanto os outros dois incluem o nome da outra pessoa no
cumprimento: “Olá, Tony Stark!”.
*/

class Pessoa {
    private $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function cumprimenta(): string {
        return "Olá!";
    }

    public function cumprimentaComNome($nome):string {
        return "Olá, {$nome}!";
    }

    public function cumprimentaPessoa(Pessoa $pessoa): string{
        return "Olá, {$pessoa->getNome()}!";
    }

}

$p1 = new Pessoa("João");
$p2 = new Pessoa("Maria");

echo $p1->cumprimenta()."\n";
echo $p1->cumprimentaComNome("Pedro")."\n";
echo $p1->cumprimentaPessoa($p2)."\n";

?>