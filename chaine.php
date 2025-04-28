
<?php
$pays1 = "France";
$pays2 = "Espagne";
$pays3 = "Italie";

$pays = ['pays1', 'pays2', 'pays3'];

foreach ($pays as $p) {
    echo strtoupper($$p) . "<br>";
}
?>
<?php
$phrase = "Le langage PHP n'est pas compilé, le PHP est interprété.";

$nombreOccurrences = substr_count($phrase, "PHP");
echo "Nombre d'occurrences de 'PHP' : $nombreOccurrences <br>";

$nouvellePhrase = str_replace("PHP", "Javascript", $phrase);
echo "Nouvelle phrase : $nouvellePhrase";
?>
<?php
$texte = "Les sanglots longs des violons de l'automne bercent mon cœur d'une langueur monotone";
$mot = "cœur";

$position = strpos($texte, $mot);

echo $texte . "<br>";
echo str_repeat(" ", $position) . "^";
?>

