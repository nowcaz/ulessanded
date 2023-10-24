//ül 5, Jan-Kenyon Noukas TARpe22 24.10.2023

<?php

$tudrukud = array("Anni", "Anna", "Sandra", "Emma", "Eve", "Anette", "Mia", "Helena");

echo "Esimene 3 nime:<br>";
for ($i = 0; $i < 3; $i++) {
    echo $tudrukud[$i] . "<br>";
}

echo "Viimane nimi: " . end($tudrukud) . "<br>";

$randomIndex = array_rand($tudrukud);
echo "Suvaline nimi: " . $tudrukud[$randomIndex] . "<br>";
?>