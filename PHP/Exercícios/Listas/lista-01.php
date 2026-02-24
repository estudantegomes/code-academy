<?php

echo "===== Exercício 1 =====\n";
$nome = "João";
$idade = 25;
$altura = 1.75;
echo "Meu nome é $nome, tenho $idade anos e meço {$altura}m.\n\n";


echo "===== Exercício 2 =====\n";

$x1 = 42;
$x2 = 3.14;
$x3 = "PHP";
$x4 = true;
$x5 = null;

echo "Valor: ";
var_export($x1);
echo " | Tipo: " . gettype($x1) . "\n";

echo "Valor: ";
var_export($x2);
echo " | Tipo: " . gettype($x2) . "\n";

echo "Valor: ";
var_export($x3);
echo " | Tipo: " . gettype($x3) . "\n";

echo "Valor: ";
var_export($x4);
echo " | Tipo: " . gettype($x4) . "\n";

echo "Valor: ";
var_export($x5);
echo " | Tipo: " . gettype($x5) . "\n";
echo "\n";


echo "===== Exercício 3 =====\n";
$altura = 1.84;
$peso = 94;
$imc = $peso / ($altura * $altura);
echo "IMC: ", $imc, "\n\n";


echo "===== Exercício 4 =====\n";
$a = 10;
$b = 20;
echo "Antes da troca: a=$a, b=$b\n";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "Depois da troca: a=$a, b=$b\n\n";


echo "===== Exercício 5 =====\n";
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;
$kelvin = $celsius + 273.15;
echo "Celsius: $celsius °C | Fahrenheit: $fahrenheit °F | Kelvin: $kelvin K\n\n";


echo "===== Exercício 6 =====\n";

$x = "10";
$y = 10;
//"10" e 10 são valores iguais e de tipo diferentes, o uso do operador "==" compara apenas os valores, resultando em verdadeiro
echo "x == y: ";
var_dump($x == $y);
echo "\n";
//nessa situação há o uso do estritamente igual, o que não é verdade pois as variáveis possuem tipos diferentes
echo "x === y: ";
var_dump($x === $y);
echo "\n";
//O resultado dessa operação será falso porque os valores comparados são iguais, apesar de possuírem tipos diferentes
echo "x != y: ";
var_dump($x != $y);
echo "\n";
//Já no caso do uso de estritamente diferente será verdadeiro pois é levado em consideração o tipo dos dados em comparação
echo "x !== y: ";
var_dump($x !== $y);
echo "\n\n";


echo "===== Exercício 7 =====\n";
$numero = 7;

if ($numero % 2 == 0) {
    echo "Número par\n\n";
} else {
    echo "Número ímpar\n\n";
}


echo "===== Exercício 8 =====\n";
$v1 = "123abc";
$v2 = "";
$v3 = "0";

echo "Valor: $v1 | Int: " , (int)$v1 . " | Float: " , (float)$v1 , " | Bool: " , (bool)$v1 , "\n";

echo "Valor: $v2 | Int: " , (int)$v2. " | Float: " , (float)$v2 , " | Bool: " , (bool)$v2 , "\n";

echo "Valor: $v3 | Int: " , (int)$v3 . " | Float: " , (float)$v3 , " | Bool: " , (bool)$v3 , "\n";


echo "===== Exercício 9 =====\n";
$total = 100;
$total += 50;
$total -= 30;
$total *= 2;
$total /= 4;
$resto = $total % 7;
echo "Valor final: $total\n";
echo "Resto por 7: $resto\n";
echo "Total em reais: ", (string)$total, " reais\n\n";


echo "===== Exercício 10 =====\n";
$idade = 20;
$possuiCNH = true;
$estaBebado = false;echo "===== Exercício 15 =====\n";

if ($idade >= 18 && $possuiCNH && !$estaBebado) {
    echo "Pode dirigir.\n";
} else {
    echo "Não pode dirigir.\n";
}

if (!$possuiCNH || $estaBebado) {
    echo "Precisa de carona.\n";
}
echo "\n";


echo "===== Exercício 11 =====\n";
$contador = 5;
echo "Valor inicial: $contador\n";
echo "Pós-incremento: ", $contador++, "\n";
echo "Após pós-incremento: $contador\n";
echo "Pré-incremento: ", ++$contador, "\n";
echo "Pós-decremento: ", $contador--, "\n";
echo "Após pós-decremento: $contador\n";
echo "Pré-decremento: ", --$contador, "\n\n";

//Não há diferença no resultado utilizando o pré ou pós-incremento


echo "===== Exercício 12 =====\n";
$produto = "notebook";
$preco = 3500.99;

echo "Concatenação -> O produto ", $produto, " custa R$ ", $preco, "\n";
echo "Interpolação -> O produto {$produto} custa R$ {$preco}\n\n";


echo "===== Exercício 13 =====\n";
$precoOriginal = 250.0;
$desconto = 15/100;
$valorDesconto = $precoOriginal * $desconto;
$valorFinal = $precoOriginal - $valorDesconto;

echo "Preço do produto: R$ ", $precoOriginal, "\nValor de desconto: R$ ", $valorDesconto, "\nValor final: R$ ", $valorFinal, "\n", ($valorFinal < 200 ? "Compra barata":"Compra cara");

echo "===== Exercício 14 =====\n";
$var1 = "100";
$var2 = 100;
$var3 = true;
$var4 = 100.5;
$var5 = null;
$var6 = "";

echo "Valor: ", $var1,
" | is_int? ", is_int($var1) ? "sim" : "não",
" | is_float? ", is_float($var1) ? "sim" : "não",
" | is_string? ", is_string($var1) ? "sim" : "não",
" | is_bool? ", is_bool($var1) ? "sim" : "não",
" | is_null? ", is_null($var1) ? "sim" : "não",
" | is_numeric? ", is_numeric($var1) ? "sim" : "não",
"\n\n";

echo "Valor: ", $var2,
" | is_int? ", is_int($var2) ? "sim" : "não",
" | is_float? ", is_float($var2) ? "sim" : "não",
" | is_string? ", is_string($var2) ? "sim" : "não",
" | is_bool? ", is_bool($var2) ? "sim" : "não",
" | is_null? ", is_null($var2) ? "sim" : "não",
" | is_numeric? ", is_numeric($var2) ? "sim" : "não",
"\n\n";

echo "Valor: ", $var3,
" | is_int? ", is_int($var3) ? "sim" : "não",
" | is_float? ", is_float($var3) ? "sim" : "não",
" | is_string? ", is_string($var3) ? "sim" : "não",
" | is_bool? ", is_bool($var3) ? "sim" : "não",
" | is_null? ", is_null($var3) ? "sim" : "não",
" | is_numeric? ", is_numeric($var3) ? "sim" : "não",
"\n\n";

echo "Valor: ", $var4,
" | is_int? ", is_int($var4) ? "sim" : "não",
" | is_float? ", is_float($var4) ? "sim" : "não",
" | is_string? ", is_string($var4) ? "sim" : "não",
" | is_bool? ", is_bool($var4) ? "sim" : "não",
" | is_null? ", is_null($var4) ? "sim" : "não",
" | is_numeric? ", is_numeric($var4) ? "sim" : "não",
"\n\n";

echo "Valor: ", $var5,
" | is_int? ", is_int($var5) ? "sim" : "não",
" | is_float? ", is_float($var5) ? "sim" : "não",
" | is_string? ", is_string($var5) ? "sim" : "não",
" | is_bool? ", is_bool($var5) ? "sim" : "não",
" | is_null? ", is_null($var5) ? "sim" : "não",
" | is_numeric? ", is_numeric($var5) ? "sim" : "não",
"\n\n";

echo "Valor: ", $var6,
" | is_int? ", is_int($var6) ? "sim" : "não",
" | is_float? ", is_float($var6) ? "sim" : "não",
" | is_string? ", is_string($var6) ? "sim" : "não",
" | is_bool? ", is_bool($var6) ? "sim" : "não",
" | is_null? ", is_null($var6) ? "sim" : "não",
" | is_numeric? ", is_numeric($var6) ? "sim" : "não",
"\n\n";

echo "===== Exercício 15 =====\n";

$nomeUsuario = "Carlos";

$nome = $nomeUsuario ?? "Visitante";
$tema = $temaEscolhido ?? "claro";

echo "Nome: $nome\n";
echo "Tema: $tema\n\n";

/* O operador entrega uma alternativa definida previamente caso não haja valor para a variável */

echo "===== Exercício 16 =====\n";
$valorTotal = 1899.90;
$numParcelas = 6;
$valorParcelas = $valorTotal / $numParcelas;
$difFloor = (floor($valorParcelas) * $numParcelas) - $valorTotal;
$difCeil = (ceil($valorParcelas) * $numParcelas) - $valorTotal;
$difRound = (round($valorParcelas) * $numParcelas) - $valorTotal;

echo "Valor total: ", $valorTotal, "\nQuantidade de Parcelas: ", $numParcelas, "\nValor das parcelas: ", $valorParcelas, "\nDiferença com floor: ", $difFloor,"\nDiferença com ceil: ", $difCeil,"\nDiferença com round: ", $difRound, "\n\n";

echo "===== Exercício 17 =====\n";
$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 6.5;
// $peso1 = 2;
// $peso2 = 3;
// $peso3 = 5;

// $media = (($nota1*$peso1) + ($nota2*$peso2) + ($nota3*$peso3))/3;
$media = ($nota1 + $nota2 + $nota3)/3;

echo "Nota: " . number_format($media, 2) . "\nStatus: ", ($media >= 7 ? "Aprovado":($media >= 5 ? "Recuperação":"Reprovado"));
?>
