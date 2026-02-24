<?php

// Modele e implemente um objeto que retorne uma cadeia de caracteres com a etiqueta eletrônica de
// um nome, contendo o valor do quilo, para ser fixada em prateleiras de um supermercado. Essa
// informação é útil a fim de que o consumidor possa comparar preços, quando as embalagens dos
// nomes possuem gramas diferentes. São atributos do nome: descrição, grama em quilos e preço.
// Exemplos de etiquetas geradas:
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Barra de Chocolate Diamante Negro
// grama: 0,090 kg
// Preço: R$ 5,99
// Preço do quilo: R$ 66,56
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Ovo de Páscoa Diamante Negro
// grama: 0,176 kg
// Preço: R$ 29,90
// Preço do quilo: R$ 169,89
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

class Produto {
    private $nome, $quilo, $preco;

    public function __construct(string $nome,float $quilo,float $preco){
        $this->nome = $nome;
        $this->quilo = $quilo;
        $this->preco = $preco;
    }

    public function detalhes(){
        return "nome: {$this->nome}, quilo: {$this->quilo}, preço: R$ {$this->preco}";
    }

    public function etiqueta(){
        $precoQuilo = $this->preco / $this->quilo;

         return "\n- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n" .
           "{$this->nome}\n" .
           "Grama: {$this->quilo} kg\n" .
           "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n" .
           "Preço do quilo: R$ " . number_format($precoQuilo, 2, ',', '.') . "\n" .
           "- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    }
}

$chocolate = new Produto("Barra de Chocolate Diamante Negro", 0.120, 7.50);
echo $chocolate->detalhes(), $chocolate->etiqueta(); 


?>