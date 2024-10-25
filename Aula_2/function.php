<?php

// PHP Functions

function minhaMensagem() {
    echo"Olá, ";
}

//chamando a função
minhaMensagem();

function nomeFamilia($fnome){
    echo "$fnome Silva.<br>";
}

minhaMensagem(); nomeFamilia("Jani");
minhaMensagem(); nomeFamilia("Hege");
minhaMensagem(); nomeFamilia("kaile");
minhaMensagem(); nomeFamilia("Stale");
minhaMensagem(); nomeFamilia("Borge");

echo"<br>";
function nomeFamilia1($fnome, $fano){
    echo "Nome: $fnome, nasceu em $fano <br>";
}
nomeFamilia1("Jani", "1975");


function sum($x, $y){
    $z = $x + $y;
    return $z;
}

echo "<br> 5 + 10 = " . sum(5, 10) . "<br>";
echo "<br> 7 + 13 = " . sum(7, 13) . "<br>";
echo "<br> 2 + 4 = " . sum(2, 4) . "<br>";
?>