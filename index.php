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


$aux=0;
$seq=array();

for($i=1; $i<$n; $i++){
    if($i <= 2){
        $seq[$i] = $i;
    }else{
        $seq[$i] = $seq[$i - 1] + $seq[$i - 2];
    }    
}

writeMessage("Fibonacci");
writeMessage(implode('-',$seq),'');

$saque=80;
$cedulas=array(10,50);
rsort($cedulas);
$contCedulas=array();

foreach($cedulas as $cedula){
    $contCedulas[$cedula]=0;
}
var_dump($cedulas);
$caixa=900;
$aux = 0;//$saque;
$i=0;
if($saque % 10 != 0){
     throw new Exception("Error Processing Request", 1);    
}
$aux = $saque;
while($aux > 0){
        if($cedulas[$i] <= $aux){
            writeMessage("sacando: ".$cedulas[$i]);
            $aux -= $cedulas[$i];
            $contCedulas[$cedulas[$i]]++;
        }else{
            $i++;
        }
}

writeMessage("Saque realizado");
writeMessage("Valor: ".$saque);

foreach($contCedulas as $cedula => $q){
    writeMessage($q.' de '.$cedula);
}



