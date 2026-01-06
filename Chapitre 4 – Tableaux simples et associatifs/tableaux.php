<?php
$animaux = ["Chat", "Chien", "Lapin"];
echo "Premier animal : " . $animaux[0] . "<br>";
/*
Result
Premier animal : Chat*/

foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
}
/*
Result
Animal : Chat
Animal : Chien
Animal : Lapin*/

$voiture = [
    "marque" => "Toyota",
    "modele" => "Corolla",
    "année" => 2020
];
echo "Modèle : " . $voiture["modele"] . "<br>";
/*
Result
Modèle : Corolla*/ 

/*Ajouter et supprimer des éléments*/
$fruits = ["Pomme", "Banane"];
array_push($fruits, "Mangue"); // Ajoute "Mangue"
unset($fruits[1]); // Supprime "Banane"

echo "Nombre de fruits : " . count($fruits);
/* Compter
Nombre de fruits : 2*/
