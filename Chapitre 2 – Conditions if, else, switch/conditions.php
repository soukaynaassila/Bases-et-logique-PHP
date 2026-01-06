<?php
/*Créer la condition if/else*/
$age = 17;
if ($age >= 18) {
    echo "Vous êtes majeur.";
} else {
    echo "Vous êtes mineur.";
}
/*Result
Vous êtes mineur*/
/*Ajouter une condition else if*/
$note = 14;
if ($note >= 16) {
    echo "Très bien";
} elseif ($note >= 10) {
    echo "Passable";
} else {
    echo "Échec";
}
/*
result=
assable*/
/*Utiliser switch*/
$jour = "Vendredi";
switch ($jour) {
    case "Lundi":
        echo "Début de semaine";
        break;
    case "Vendredi":
        echo "Dernier jour avant le week-end";
        break;
    default:
        echo "Jour normal";
}
/*Result
Dernier jour avant le week-end*/