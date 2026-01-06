<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Nombre : $i <br>";
}
/*Result 
Nombre : 1
Nombre : 2
Nombre : 3
Nombre : 4
Nombre : 5
Nombre : 6
Nombre : 7
Nombre : 8
Nombre : 9
Nombre : 10*/
$j = 1;
while ($j <= 5) {
    echo "Itération : $j <br>";
    $j++;
}
/*Result
Itération : 1
Itération : 2
Itération : 3
Itération : 4
Itération : 5*/
$animaux = ["Chat", "Chien", "Lapin"];
foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
}
/*Animal : Chat
Animal : Chien
Animal : Lapin*/
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue; // saute le 5
    if ($i == 8) break;    // arrête à 8
    echo "Valeur : $i <br>";
}
/*Valeur : 1
Valeur : 2
Valeur : 3
Valeur : 4
Valeur : 6
Valeur : 7*/