<?php

echo "===== Exercício 1 =====\n";
$frase1 = "Aprender PHP eh divertido!";
$frase2 = "Aprender PHP é divertido!";

echo strlen($frase1)."\n";
echo mb_strlen($frase2)."\n";

echo "===== Exercício 2 =====\n";
$hw = "Hello, World";

echo strtoupper($hw). "\n";
echo strtolower($hw). "\n";

echo "===== Exercício 3 =====\n";
$s1 = "programação web";

echo strtoupper(substr($s1,0, 1)).substr($s1, 1)."\n";
echo ucfirst($s1) . "\n";
echo ucwords($s1) . "\n";

echo "===== Exercício 4 =====\n";
$s2 = "abcdefghij";

echo substr($s2, 0, 3)."\n";
echo substr($s2, 4, 4)."\n";
echo substr($s2, -2)."\n";

echo "===== Exercício 5 =====\n";
$s3 = "O rato roeu a roupa do rei de Roma";

echo strpos($s3, "roupa")."\n";
echo strrpos($s3, "r")."\n";

echo "===== Exercício 6 =====\n";
$s4 = "Eu gosto de Java";
$s5 = "Eu gosto de Java e JAVA";

echo str_replace("Java", "PHP", $s4)."\n";
echo str_ireplace("Java", "PHP", $s5)."\n";

echo "===== Exercício 7 =====\n";
$s6 = " Olá, mundo!  ";

echo rtrim($s6)."\n";
echo ltrim($s6)."\n";
echo trim($s6)."\n";
//remove todos os espaços(gambiarra)
//echo str_replace(' ', '', $s6);

echo "===== Exercício 8 =====\n";
echo str_repeat("-", 40)."\n";
echo str_repeat("*", 20)."\n";

echo "===== Exercício 9 =====\n";
$s7 = "Php";
echo strrev($s7)."\n";

function isPalindrome($string):bool{
    return $string == strrev($string);
}

var_export(isPalindrome("arara"));
echo "\n";

echo "===== Exercício 10 =====\n";
$s10 = "banana";

echo substr_count($s10, "ana")."\n";
echo substr_count($s10, "a")."\n";

?>