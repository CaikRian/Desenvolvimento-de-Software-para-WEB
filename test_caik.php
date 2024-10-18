<?php

// upper case
$x = "Hello Word";
echo strtoupper($x);
echo "<br>";

// lower case
$y = "Hello Word";
echo strtolower($y);
echo "<br>";

// trim
$nome = "caik";
$nome_mudado = trim($nome);
echo $nome_mudado;
echo "<br>";

// String Concatenation
$x = "Hello";
$y = "Word";
$z = $x . $y;
echo $z;
echo "<br>";

// Slicing
$x = "Hello Word!";
echo substr($x, 6, 5);
echo "<br>";

// tamanho da string
echo strlen($x);
echo "<br>";

// contar quantos caracteres tem
echo str_word_count($x);
echo "<br>";

/*
// Escape Charactere
 $x = "Nós somos os chamados 'Vikings'
  do norte";
  echo $x; // <-- esta linha dá erro pois faltou scape
*/
echo "<br>";

$y = "Nós somos chamados de \"Vikings\"|    | do norte";

echo $y;



//Definindo o fuso horario para américa/são paulo
//(horário do Brasil)
date_default_timezone_set("America/Sao_Paulo");

/*
$t = date("H");
var_dump($t);
exit; 
*/

function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</prep>";
    die();
}
//dd($t);

if ($t < "10") {
    echo "Tenho uma agradável manhã!";

} elseif ($t < "20") {
    echo "Tenha um bom dia!";

} else {
    echo "Tenha uma boa noite!";

}

$favcon = "vermelho";

switch ($favcon){
    case "vermelho":
        echo "sua cor favorita é vermelha";
        break;
    case "azul":
        echo "sua cor favorita é azul";
        break;
    case "verde":
        echo "sua cor favorita é verde";
        break;
    default:
    echo "Você não gosta de nada.";
}


?>