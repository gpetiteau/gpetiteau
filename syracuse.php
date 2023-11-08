<?php
$n=readline("Saisir un nombre :");
echo "Les 20 premiers termes de la suite de Syracuse pour N=$n sont :";
echo PHP_EOL;
for($terme=1;$terme<=20;$terme=$terme+1){
    echo $n.' ';
    if($n == ($n %2==0)){
   $n = $n/2;
}else{
   $n = ($n * 3) + 1;
}
}