<?php

$chaineAChiffer = readline("Entrez une chaine à chiffrer : ");
$decalage = readline("Entrez un décalage : ");

$resultat = "";

for ($i = 0; $i < strlen($chaineAChiffer); $i++) {
$char = substr($chaineAChiffer, $i, 1);
if (ctype_alpha($char)) {
$ascii = ord($char);

$asciiDecale = $ascii + $decalage;

$estEnMajuscule = ctype_upper($char);
if ($estEnMajuscule) {

if ($asciiDecale > ord('Z')) {
$asciiDecale -= 26;
}
}
else {
if ($asciiDecale > ord('z')) {
$asciiDecale -= 26;
}
}

$resultat .= chr($asciiDecale);
}
else {
$resultat .= $char;
}
}

echo "Texte original : " . $chaineAChiffer . PHP_EOL;
echo "Texte chiffré : " . $resultat . PHP_EOL;
