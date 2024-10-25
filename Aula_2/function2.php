<?php

// --------> Exemplo - Variável local
function minhaFuncao(){
    $localVar = "Sou uma variável local.";
    echo $localVar; // funciona dentro da função
}
minhaFuncao(); // Irá imprimir

//echo $localVar; // Vai dar erro, pq essa variável só está criada dentro da function


// --------> Exemplo - Variável global
$globalVar = "Sou uma variável global";
function acessarGlobal(){
    global $globalVar; // usando 'global'
    echo $globalVar;
}
acessarGlobal(); // Irá imprimir "Sou uma variável local."

// --------> Exemplo - Variável local e pública DENTRO DE CLASSES

class MinhaClasse{
    public $variavelPublica = "Sou uma variável pública.";
    private $variavelPrivada = "Sou uma variável privada.";

    public function mostrarVariaveis(){
        echo $this->variavelPublica; // --> Acessa a variável pública
        echo "<br>";
        echo $this->variavelPrivada; // --> Acessa a variável privada
    }
}

$obj = new MinhaClasse();

// $obj->variavelPrivada; --> Isso vai dar erro
$obj->mostrarVariaveis(); 



?>