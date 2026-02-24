<?php

echo "===== Exercício 1 =====\n";

for($i = 1; $i <= 20; $i++){
    echo $i."\n";
}


echo "===== Exercício 2 =====\n";
$i = 10;
while($i>=0){
    echo $i. "\n";
    $i--;
}


echo "===== Exercício 3 =====\n";
$soma = 0;

for($i = 0; $i <= 100; $i+=2){
    $soma += $i;
}

echo "Soma = ". $soma ."\n";


echo "===== Exercício 4 =====\n";
echo "Informe um número: ";
// $numero = (int)fgets(STDIN);
$numero = 7;

echo "\nTABUADA DO $numero \n";

for($i = 1; $i <= 10; $i++){
    $aux = $i * $numero;
    echo "$numero x $i = ". $aux . "\n";
}
echo "\n\n";


echo "===== Exercício 5 =====\n";
echo "Informe um número: ";
// $n = (int)fgets(STDIN);
$n = 6;

$aux = $n;
$fatorial = 1;
while($aux>0){
    $fatorial *= $aux;
    $aux--;
}

echo "\n$n! = $fatorial\n\n";
   

echo "===== Exercício 6 =====\n";
for( $i = 1; $i <= 30; $i++){
    if(($i % 2) != 0){
        echo $i. "\n";
    }
}

echo "===== Exercício 7 =====\n";
$tentativas = [15, -3, 7];
$validas = [];
$i = 0;

$total = count($tentativas);

do{
    if($tentativas[$i] >= 0 && $tentativas[$i] <= 10){
        array_push($validas, $tentativas[$i]);
    }
    $i++;
}while($i < $total);

echo "Notas válidas: ";
print_r($validas);


echo "===== Exercício 8 =====\n";
$soma = 0;
for( $i = 1; $i < 100; $i++){
    $soma += $i;
    if($soma >= 200 ){
        break;
    }
}

echo "Total acumulado: " . $soma ."\n\n";


echo "===== Exercício 9 =====\n";
for($i = 1; $i <= 20; $i++){
    if($i%3 == 0){
        continue;
    }else echo $i."\n";
}

echo "===== Exercício 10 =====\n";
$fibonacci = [0, 1];
$i = 2;

for($i = 2; $i<15; $i++){
    array_push($fibonacci, $fibonacci[$i-1]+$fibonacci[$i-2]);
}
print_r($fibonacci);


echo "===== Exercício 11 =====\n";
$notas = [8.5, 6.0, 9.2, 7.8, 5.5];
$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Média: " . number_format($media, 2) . "\n\n";

echo "===== Exercício 12 =====\n";
$valores = [34,12,89,3,56,71,23];
$maior = $valores[0];
$menor = $valores[1];

foreach ($valores as $valor) {
    if($valor > $maior)
        $maior = $valor;
    if($valor < $menor)
        $menor = $valor;
}

echo "Maior valor: " . $maior ."\n";
echo "Menor valor: " . $menor ."\n";

echo "===== Exercício 13 =====\n";
$original = "PHP e legal.";
$total = strlen($original);
$invertida = "";
for($i = $total; $i >= 0; $i--){
    $invertida .= $original[$i];
}

echo $invertida, "\n\n";

echo "===== Exercício 14 =====\n";
function isPrimo($n): bool{
        if ($n <= 1)
            return false;

        if ($n == 2 || $n == 3 || $n == 5 || $n == 7)
            return true;

        if ($n % 2 == 0 || $n % 3 == 0 || $n % 5 == 0 || $n % 7 == 0)
            return false;

        for ($i = 11; $i <= sqrt($n); $i += 2) {
            if ($n % $i == 0)
                return false;
        }

        return true;
}

for($i = 2; $i <= 50; $i++){
    if(isPrimo($i))
        echo "$i é Primo.\n";
}

echo "\n\n";

echo "===== Exercício 15 =====\n";
$aluno = [
    "nome" => "Maria",
    "idade" => 2, 
    "curso" => "Engenharia",
    "media" => 8.7
];

foreach($aluno as $chave => $valor){
    echo $chave, ": " . $valor . "\n"; 
}

echo "\n\n";

?>