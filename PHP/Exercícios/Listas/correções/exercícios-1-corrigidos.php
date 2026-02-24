<?php

##
## Conteúdo adicional para ajudar a entender a correção dos exercícios
## 
## Execute seu código PHP rodando "php exercicios-1-corrigidos.php" em seu terminal
##
## Você também pode utilizar a extensão Code Runner (Jun Han) para rodar o código no VS Code.
## Repare que em alguns tutoriais/cursos o instrutor utiliza outro método,
## rodando PHP no navegador.
## 
## Aula sobre funções: https://youtu.be/k1IXRuf2wAg?si=mNBISUAqRIwD_mpw 
##
## Função predefinida number_format: https://youtu.be/Szhcgt6zT3w?si=aMZPL3-ChfTWd_A0
## Obs: Utilize "," como separador decimal e "." como separador de milhares SOMENTE para o formato
## monetário brasileiro.
##

// ============================================================
// Exercício 1 — Apresentação pessoal
// ============================================================
echo "--- Exercício 1: Apresentação pessoal ---\n";

$nome = "João";
$idade = 25;
$altura = 1.75;

echo "Meu nome é $nome, tenho $idade anos e meço $altura";

// ============================================================
// Exercício 2 — Verificador de tipo
// ============================================================
echo "\n--- Exercício 2: Verificador de tipo ---\n";

$inteiro = 42;
$float = 3.14;
$string = "PHP";
$booleanVerdadeiro = true;
$nulo = null;

function exibirTipo($var)
{
    echo gettype($var) . "\n";
}

exibirTipo($inteiro); // integer
exibirTipo($float);   // double (float)
exibirTipo($string);  // string
exibirTipo($booleanVerdadeiro); // boolean
exibirTipo($nulo);    // NULL

// ============================================================
// Exercício 3 — Calculadora de IMC
// ============================================================
echo "--- Exercício 3: Calculadora de IMC ---\n";

$peso = 75.0;
$alturaIMC = 1.80;

$imc = number_format($peso / ($alturaIMC * $alturaIMC), 2);

echo $imc;

// ============================================================
// Exercício 4 — Troca de valores
// ============================================================
echo "--- Exercício 4: Troca de valores ---\n";

$a = 10;
$b = 20;

echo "\$a = $a, \$b = $b\n";

// Troca sem variável auxiliar usando operadores aritméticos
$a += $b; // $a = 30
$b = $a - $b; // $b = 10
$a -= $b; // $a = 20

echo "\$a = $a, \$b = $b";

// ============================================================
// Exercício 5 — Conversor de temperatura
// ============================================================
echo "--- Exercício 5: Conversor de temperatura ---\n";

$celsius = 36.5;

$fahrenheit = number_format($celsius * 9 / 5 + 32, 2);
$kelvin = number_format($celsius + 273.15, 2);

echo "Celsius: $celsius °C\n";
echo "Fahrenheit: $fahrenheit °F\n";
echo "Kelvin: $kelvin K";

// ============================================================
// Exercício 6 — Operadores de comparação
// ============================================================

echo "\n--- Exercício 6: Operadores de comparação ---\n";

$x = "10"; // string
$y = 10;   // int

var_export($x == $y);
#Resultado: true, porque o operador "==" compara os valores após conversão de tipo, e "10" é convertido para 10.#

echo "\n";

var_export($x === $y);
# Resultado: false, porque o operador "===" compara tanto o valor quanto o tipo, e "10" (string) não é do mesmo tipo que 10 (int).

echo "\n";

var_export($x != $y);
# Resultado: false, porque "10" e 10 são considerados iguais em valor, então a negação é falsa.

echo "\n";

var_export($x !== $y);
# Resultado: true, porque "10" e 10 não são idênticos (diferente tipo), então a negação é verdadeira.

// ============================================================
// Exercício 7 — Par ou ímpar com operador módulo (Conteúdo dos slides 2)
// ============================================================
echo "--- Exercício 7: Par ou ímpar ---\n";

$numero = 17;

if ($numero % 2 === 0) {
    echo "O número {$numero} é par.\n";
} else {
    echo "O número {$numero} é ímpar.\n";
}
echo "\n";

// ============================================================
// Exercício 8 — Casting explícito
// ============================================================
echo "--- Exercício 8: Casting explícito ---\n";

# Casting é o processo de converter um valor de um tipo para outro.

$valor1 = "123abc";
$valor2 = "";
$valor3 = "0";

function castingManual($valor)
{
    echo (int) $valor;
    echo "\n";

    echo (float) $valor;
    echo "\n";

    var_export((bool) $valor);
    echo "\n";
}

castingManual($valor1);
castingManual($valor2);
castingManual($valor3);

// ============================================================
// Exercício 9 — Operadores de atribuição combinados
// ============================================================
echo "--- Exercício 9: Operadores de atribuição combinados ---\n";

$total = 100;
echo "Valor inicial: {$total}\n";

$total += 50;
echo "Após += 50:    {$total}\n"; // 150

$total -= 30;
echo "Após -= 30:    {$total}\n"; // 120

$total *= 2;
echo "Após *= 2:     {$total}\n"; // 240

$total /= 4;
echo "Após /= 4:     {$total}\n"; // 60

$total %= 7;
echo "Após %%= 7:     {$total}\n"; // 4

$total = (string) $total;
$total .= " reais";
echo "Após .= :      {$total}\n\n"; // "4 reais"

// ============================================================
// Exercício 10 — Operadores lógicos
// ============================================================
echo "--- Exercício 10: Operadores lógicos ---\n";

$possuiCNH = true;
$estaBebado = false;

if ($possuiCNH && !$estaBebado) {
    echo "O cidadão pode dirigir.\n";
} else {
    echo "O cidadão não pode dirigir, precisa de carona.\n";
}

// ============================================================
// Exercício 11 — Incremento e decremento
// ============================================================
echo "--- Exercício 11: Incremento e decremento ---\n";

$contador = 5;

echo $contador++ . "\n"; // Exibe 5, depois incrementa para 6

echo $contador . "\n"; // Exibe 6

$contador = 5; // reset

echo ++$contador . "\n"; // Incrementa para 6, depois exibe 6

echo $contador . "\n"; // Exibe 6

$contador = 5; // reset

echo $contador-- . "\n"; // Exibe 5, depois decrementa para 4

echo $contador . "\n"; // Exibe 4

echo --$contador . "\n"; // Decrementa para 3, depois exibe 3

echo $contador . "\n"; // Exibe 3

// ============================================================
// Exercício 12 — Interpolação vs. concatenação
// ============================================================
echo "--- Exercício 12: Interpolação vs. concatenação ---\n";

$produto = "Notebook";
$preco = 3500.99;

// Forma 1: Concatenação
echo "O produto " . $produto . " custa R$" . $preco . ".\n";

// Forma 2: Interpolação com aspas duplas
echo "O produto $produto custa R$$preco.\n";

// ============================================================
// Exercício 13 — Simulador de desconto
// ============================================================
echo "--- Exercício 13: Simulador de desconto ---\n";

$precoOriginal = 250.0;
$desconto = 0; // percentual

$valorDesconto = $precoOriginal * ($desconto / 100);
$precoFinal = $precoOriginal - $valorDesconto;

$classificacao = ($precoFinal < 200) ? "Compra barata" : "Compra cara";

echo $classificacao;

// ============================================================
// Exercício 14 — Verificador de tipo com is_*
// ============================================================
echo "--- Exercício 14: Verificador de tipo com is_* ---\n";

$var1 = 42;
$var2 = "42";
$var3 = 3.14;
$var4 = true;
$var5 = null;

$variaveis = [$var1, $var2, $var3, $var4, $var5];

foreach ($variaveis as $val) {
    //  "para cada elemento de $variaveis, chame-o de $val"
    var_export($val);
    echo "\n";
    $isInt     = is_int($val)     ? "Sim" : "Não";
    $isFloat   = is_float($val)   ? "Sim" : "Não";
    $isString  = is_string($val)  ? "Sim" : "Não";
    $isBool    = is_bool($val)    ? "Sim" : "Não";
    $isNull    = is_null($val)    ? "Sim" : "Não";
    $isNumeric = is_numeric($val) ? "Sim" : "Não";

    echo "is_int? $isInt | is_float? $isFloat | is_string? $isString | "
        . "is_bool? $isBool | is_null? $isNull | is_numeric? $isNumeric\n\n";
}

// ============================================================
// Exercício 15 — Operador null coalescing
// ============================================================
echo "--- Exercício 15: Operador null coalescing ---\n";

$temaPadrao = "escuro";

$nome = $nomeUsuario ?? "Visitante";

$tema = $temaEscolhido ?? $temaPadrao ?? "claro";

echo "Nome: $nome\n";
echo "Tema: $tema\n";

$valorExplicito = null;
$resultado = $valorExplicito ?? "valor padrão";

echo "$resultado\n";

// ============================================================
// Exercício 16 — Cálculo de parcelas
// ============================================================
echo "--- Exercício 16: Cálculo de parcelas ---\n";

$valorTotal = 1899.90;
$numParcelas = 6;

$valorParcela = round($valorTotal / $numParcelas, 2);

echo $valorParcela . "\n";

$valorParcelaCeil = ceil($valorTotal / $numParcelas);

echo $valorParcelaCeil . "\n";

$valorParcelaFloor = floor($valorTotal / $numParcelas);

echo $valorParcelaFloor . "\n";

$centavoPerdidoCeil = ($valorParcelaCeil - $valorParcela);

$centavoPerdidoFloor = ($valorParcela - $valorParcelaFloor);

echo $centavoPerdidoCeil . "\n";
echo $centavoPerdidoFloor . "\n";
# Um dos problemas mais clássicos da computação: a imprecisão de ponto flutuante (IEEE 754), ocorre nesse caso.

// ============================================================
// Exercício 17 — Mini sistema de notas
// ============================================================

# Desculpas aos alunos: Eduardo Hirono, João Vitor de Carli Quadros, Guilherme Bondezan e Gabriel Vinicius
# Vocês entregaram a questão ainda com o enunciado antigo, que era mais complexo e tinha erros de lógica
# Desculpas também aos demais alunos, uma parte desnecessária do enunciado não foi removida
# A parte em questão seria "e $peso1 = 2, $peso2 = 3, $peso3 = 5"

echo "--- Exercício 17: Mini sistema de notas ---\n";

$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 6.5;

// Média aritmética simples
$mediaSimples = ($nota1 + $nota2 + $nota3) / 3;

$aprovado = $mediaSimples >= 7.0 ? "Aprovado" : "Recuperação";

echo $aprovado;
