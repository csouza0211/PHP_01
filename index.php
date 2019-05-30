<?php

$pessoa = ["nome" => "Jon", 
"sobrenome" => "Snow", 
"idade" => 27, 
"passatempo" => ["Netflix", "Futebol", "Musica"]];
echo "<pre>";
// var_dump($pessoa);

// echo "=======";
$pessoa["idade"] = 25;
// var_dump($pessoa);

// echo "=======";
$pessoa["endereço"] = "Winterfell";
// var_dump($pessoa);

$pessoa["passatempo"][]= "programação";
// var_dump($pessoa);

echo "condicionais <br>";

$a = 42;
$b = 27;

if ($a > $b){
    echo "O maior numero é $a";
} else{
    echo "O maior numero é $b";
}

echo "<br>Exercicio 2: <br>";

$numeroAleatorio = rand(1, 5);
if ($numeroAleatorio == 3 || $numeroAleatorio == 5){
    echo "Numero da Sorte!";
} else{
    echo "Não é numero da Sorte:(";
}

if ($numeroAleatorio !=3) {
    echo "<br>O numero não é 3!";
} else{
    echo "<br> $numeroAleatorio <br>";
}

$c = rand(40, 70);

if ($c > 50){
    echo "<br>O numero é maior do que 50!";
} else {
    echo "<br>O numero é menor do que 50!";
}

echo "<br><br><br>----- LOGIN -----";

$usuario = "admin";
$senha = "123";

if ($usuario == "admin" && $senha == "123") {
    echo "<br>Bem Vindo!";
} else{
    echo "<br>Error!";
}

$number = rand (1, 10); // O comando rand define um numero aleatorio

echo ($number % 2 == 0) ? "O numero é par" : "O numero é impar!";

// Como o cófigo acima funcionaria em um IF padrão
// if ($number % 2 == 0) {
//    ech "O numero é par!";
//} else{
// echo "O numero é impar!";
//}

$nota = rand (1, 10);
switch ($nota){
    case 1:
    //echo "<br><br><br>Aluno reprovado, eita!";
    //break;
    case 2:
    //echo "<br><br><br>Aluno reprovadom, poderia ter se esforçado mais!";
    //break;
    case 3:
    echo "<br><br><br>Aluno reprovadom, poderia ter se esforçado mais!";
    break;
    case 4:
    echo "<br><br><br>Na risca!";
    break;
    case 5:
    echo "<br><br><br>Na risca!";
    break;
    case 6:
    echo "<br><br><br>Bom!";
    break;
    case 7:
    echo "<br><br><br>Bom!";
    break;
    case 8:
    echo "<br><br><br>Bom!";
    break;
    case 9:
    echo "<br><br><br>Muito Bom!";
    break;
    case 10:
    echo "<br><br><br>Excelente!";
    break;
    default:
    echo "Numero Invalido";
    breack;
}
echo "<br><br> ------LOOP------ <br>";

echo "<br>Ecercicio 1: <br>";

for ($i = 0; $i <=10; $i++){
    echo "2 x $i = ". (2 * $i) . "<br>";
} 

echo "<br>Ecercicio 2: <br>";
$num = 100;
while ($num >= 85){
    echo "$num <br>";
    $num--;
}

echo "<br>Ecercicio 3: <br>";
$counter = 1;
while ($counter <=5) {
    echo $counter *2 ."<br>";
    $counter++;
}

echo "<br>Ecercicio 4: <br>";
$cara = 0;
$jogadas = 0;
while ($cara < 5){
    $moeda = rand(0,1);
    echo "<br> moeda: $moeda";
    if($moeda ==1){
        $cara++;
    } else{
        $cara =0;
    }
    $jogadas++;
}
echo "<br>Foram $jogadas jogadas";

echo "<br><br>Ecercicio 5: Parte 1<br>";
$nomes = ["Carlos", "Melina", "Orazi", "Fatima", "Adriano"];
for ($i= 0; $i < count($nomes); $i++){
    echo "<br>". $nomes[$i];
}

echo "<br><br>Ecercicio 5: Parte 2<br>";
$nomes1 = ["Bela", "Ariel", "Elssa", "Jasmin", "Branca de Neve"];
$i = 0;
while ($i < count($nomes1)){
    echo "<br>". $nomes1[$i];
    $i++;
}

echo "<br><br>Ecercicio 5: Parte 3<br>";
$nomes2 = ["Pantera Negra", "Homem Aranha", "Capitão America", "Hulk", "Homem de Ferro"];
$i = 0;
do{
    echo "<br>". $nomes2[$i];
    $i++;
}while ($i < count($nomes2));

echo "<br><br>Ecercicio 5: Parte 4<br>";
$nomes3 = ["Viuva Negra", "Gamorra", "Feiticeira Escarlate", "Vespa", "Resgate"];
foreach($nomes3 as $valor){
    echo "<br>". $valor;
}

echo "<br><br>Ecercicio 6: <br>";
$numeros = [2, 3, 7, 9, 4];
$i = 0;
do{
    echo "O 5 foi encontrato";
    $i++;
} while($numeros[$i] == 5);