<?php

/*
Aula 2 Desenvolvimento para Web - 18/10/2024

Estudo das condições: 

--> While
--> Do While
--> For
--> Foreach

*/

//While simples
echo"<hr> <h2>While simples</h2> <hr> <br>";
$i = 1;
while ($i < 6){
    echo $i, "<br>";
    $i++;
}

//com break
echo"<hr> <h2>com break</h2> <br>";
$i = 1;
while ($i < 6){
    if ($i ==3){
        echo $i;
        break;
    }
    $i++;
}

//com continue
echo"<hr> <h2>com continue</h2> <br>";
$i = 0;
while ($i < 6){
    $i++;
    if ($i == 3){
        echo "Antes do continue ", $i, "<br>";
        continue;
    }
       echo"Depois do continue ", $i, "<br>";
}

echo"<hr> <h2>com do</h2> <br>";
$i = 1;
do{
    echo $i,"<br>";
    $i++;
}
while ($i < 6);

//break or continue
echo"<hr> <h2>break or continue</h2> <br>";

$i = 1;
do{
    if ($i == 3) break; // Continue;
    echo "", $i,"<br>";
    $i++;
} 
while ($i < 6);

echo"<hr><h2>For simples</h2><br>";

for ($x = 0; $x <= 10; $x++) {
    echo "O número é: $x <br>";
}
echo"<br><hr>";
for ($x = 0; $x <= 100; $x+=10) {
    echo "O número é: $x <br>";
}
// break or continue
echo"<hr><h2>For com break or continue</h2><br>";

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break; //continue;
    echo "O número é: $x <br>";
}

// Arrays simples
echo "<hr><h2>Arrays simples</h2><br>";
echo "<hr><h2>iterando sobre o array de cores</h2><br>";
$color = array("red","green","blue","yellow");

//iterando sobre o array de cores

foreach ($color as $x)  {
    echo "$x,<br>";
}

//Instanciação
//Chaves e valores
echo "<hr><h2>Chaves e Valores</h2><br>";
echo "<hr><h2>iterando sobre o array associativo</h2><br>";
$members = array("Peter"=>"35","Ben" => "37","Joe" => "43");

foreach ($members as $x => $y) {
    echo "$x + $y <br>";
}
 
echo "<hr><h2>Class e public</h2><br>";
class Car{
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }


}
$meuCarro = new Car("red", "volvo");

foreach ($meuCarro as $color => $model) {
    echo "$color: $model <br>";
}


?>