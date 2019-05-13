<?php

$i=1;
$n=100;
function writeMessage($msg="",$tag="h5"){
    echo "<{$tag}>{$msg}</$tag>";
}

writeMessage("Números Pares");
$res = '--';
for($i;$i < $n;$i++){
    echo ($i%2==0 ? $i . " - " : '');
} 

echo "<h5>Núvemros Impares </h5>";
for($i=1; $i< $n; $i++){
    echo ($i%2!=0 ? $i . " - " : '');
}

echo "<h5>Números Primos</h5>";
$countPrimos=0;
for($i=1; $i < $n; $i++){
    $c=0;
    for($d=1; $d < $n;$d++){
        if($i % $d==0){
            $c++;
        }
    }

    if($c==2){
        echo $i.' - ';
        $countPrimos++;
    }
}

echo "<h6>Total de Primos Encontados: ".$countPrimos."</h6>";

writeMessage("Fatorial");

$fat = 10;
$res=1;

while($fat >= 1){
    writeMessage($fat,'');
    $res *= $fat;
    $fat--;
}

writeMessage("Resultado {$res}",'h6');