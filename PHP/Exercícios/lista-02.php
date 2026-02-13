<?php 

echo "===== Exercício 1 =====\n";
$idade = 17;
if($idade > 17)
    echo "Maior de idade\n\n";
else echo "Menor de idade\n\n";

echo "===== Exercício 2 =====\n";
$nota = 7.5;
if($nota >= 7) {
    echo "Aprovado\n\n";
} elseif($nota >= 5) {
    echo "Recuperação\n\n";
} else {
    echo "Reprovado\n\n";
}

echo "===== Exercício 3 =====\n";
$numero = 15;
$resultado = ($numero % 2 == 0 ? "par.": "ímpar.");
echo $numero, " é ", $resultado, "\n\n";


echo "===== Exercício 4 =====\n";
$x = 42;
$y = "Olá";
$z = true;

/*  
if (gettype($x1) == "integer") {
    echo "A variável x1 é do tipo integer.\n";
} elseif (gettype($x1) == "string") {
    echo "A variável x1 é do tipo string.\n";
} elseif (gettype($x1) == "boolean") {
    echo "A variável x1 é do tipo boolean.\n";
}
*/

echo "A variável x é do tipo ". gettype($x). ".\n";
echo "A variável y é do tipo ". gettype($y). ".\n";
echo "A variável z é do tipo ". gettype($z). ".\n\n";


echo "===== Exercício 5 =====\n";
$dia = 3;
switch ($dia) {
    case 1:
        echo "Segunda-feira\n\n";
        break;

    case 2:
        echo "Terça-feira\n\n";
        break;

    case 3:
        echo "Quarta-feira\n\n";
        break;

    case 4:
        echo "Quinta-feira\n\n";
        break;

    case 5:
        echo "Sexta-feira\n\n";
        break;

    case 6:
        echo "Sábado\n\n";
        break;

    case 7:
        echo "Domingo\n\n";
        break;

    default:
        echo "Dia inválido\n\n";
}

echo "===== Exercício 6 =====\n";
$a = "10";
$b = 10;

if($a == $b)
    echo "Igualdade fraca pois há a comparação apenas do valor.\n\n";
else echo "Não há igualdade\n\n";

if($a === $b)
    echo "Igualdade estrita pois há valores iguais e tipos iguais\n\n";
else echo "Não há igualdade estrita pois os tipos são diferentes.\n\n";

echo "===== Exercício 7 =====\n";
$peso = 94;
$altura = 1.84;
$imc = $peso / ($altura * $altura);

if($imc < 18.5)
    echo "Abaixo do peso.\n\n";
elseif($imc >= 18.5 && $imc < 25)
    echo "Peso normal.\n\n";
elseif($imc >= 25 && $imc < 30)
    echo "Sobrepeso.\n\n";
else
    echo "Obesidade.\n\n";

echo "===== Exercício 8 =====\n";
$usuario = "admin";
$senha = "1234";

if($usuario == "admin" && $senha == "1234")
    echo "Acesso permitido\n\n";
else
    echo "Acesso negado\n\n";

echo "===== Exercício 9 =====\n";
$nome = null;
$default = "Visitante";

$nome ??= $default;
$saudacao = "Olá, ".$nome. "!";

echo $saudacao, "\n\n";

echo "===== Exercício 10 =====\n";
$preco = 250;

if($preco > 500)
    $desconto = 0.15;
elseif($preco >= 200)
    $desconto = 0.10;
else
    $desconto = 0.05;

echo "Preço original: R$ ". number_format($preco, 2). "\nDesconto aplicado: ", $desconto*100, "%", "\nPreço final: R$ ". number_format($preco*(1 - $desconto), 2)."\n\n"; 

echo "===== Exercício 11 =====\n";
$celsius = 36.5;
$tipo = "F";

if($tipo == "F")
    $conversao = $celsius * 9/5 + 32;
elseif($tipo == "K")
    $conversao = $celsius + 273.15;
else
    echo "Código inválido\n\n";

if($tipo == "F" || $tipo == "K")
    echo $celsius,"°C é ",$conversao," em °",$tipo, ".\n\n";

echo "===== Exercício 12 =====\n";
$total = 100;
echo "Total: ",$total,"\n";
$total += 50;
echo "Total + 50: ",$total,"\n";
$total -= 30;
echo "Total - 30: ",$total,"\n";
$total *= 2;
echo "Total * 02: ",$total,"\n";
$total /= 4;
echo "Total / 04: ",$total,"\n\n";


echo "===== Exercício 13 =====\n";
$l1 = 5;
$l2 = 5;
$l3 = 8;
$triangulo = false;

if($l1 < $l2+$l3 && $l2 < $l1+$l3 && $l3 < $l1+$l2){
    echo "Comprimento dos lados formam um triângulo\n\n";
    $triangulo = true;
}
else echo "Comprimento dos lados não formam um triângulo.\n\n";

$cont = 0;

if($triangulo){
    if($l1 == $l2 && $l2 == $l3)
        echo "Equilátero\n\n";
    elseif($l1 == $l2 || $l2 == $l3 || $l1 == $l3)
        echo "Isósceles\n\n";
    else
        echo "Escaleno\n\n";
}

echo "===== Exercício 14 =====\n";
$idade = 25;
if($idade < 12)
    echo "Criança\n\n";
elseif($idade < 18)
    echo "Adolescente\n\n";
elseif($idade < 30)
    echo "Jovem adulto\n\n";
elseif($idade < 60)
    echo "Adulto\n\n";
else
    echo "Idoso\n\n";

echo "===== Exercício 15 =====\n";
$numero = 15;
$string = "";

if($numero % 3 == 0)
    $string .= "Fizz";
if($numero % 5 == 0)
    $string .= "Buzz";
if($string == "")
    $string = (string)$numero;

echo $string;
?>