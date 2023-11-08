<?php
$nombre = readline("Saisir un nombre entre 0 et 1000 : ");
while($nombre<0 || $nombre>1000) {
    echo "Le nombre à deviner doit être comrpris entre 0 et 1000";
   echo PHP_EOL;
    $nombre = readline("Saisir un nombre entre 0 et 1000 : ");
}
$coups=1;
$nombreordi = random_int(0,1000);
while($nombreordi != $nombre) {
   if($coups>200){
       break;
   }
    $nombreordi = random_int(0,1000);
    $coups = $coups + 1;
}
    if ($nombre == $nombreordi) {
        echo "Tu n'as pas deviné en moins de 200 coups";
    } else{
        echo "Le nombre à deviner a été trouvé en $coups coup";
    }