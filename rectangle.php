<?php
$largeur = readline("Saisire la largeur du rectangle : ");
$hauteur = readline("Saisire la hauteur du rectangle : ");
for($i=0;$i<$hauteur;$i=$i+1){
    for($j=0;$j<$largeur;$j=$j+1){
   echo"*".' ';
}
    echo PHP_EOL;
}
