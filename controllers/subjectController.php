<?php


require_once "models/subject.php";

$subjects = array(
    array("id" => 1, "tId" => 2, "Nom" => "Algorithmique", "Durée" => 4, "Description" => "Cours d'algo", "Note" => 11),
    array("id" => 2, "tId" => 9, "Nom" => "Anglais", "Durée" => 12 * 7, "Description" => "Cours d'anglais", "Note" => 10),
    array("id" => 3, "tId" => 3, "Nom" => "Angular", "Durée" => 12 * 7, "Description" => "Cours d'angular", "Note" => 16),
    array("id" => 4, "tId" => 8, "Nom" => "BDD", "Durée" => 9 * 7, "Description" => "Cours de BDD", "Note" => 18),
    array("id" => 5, "tId" => 6, "Nom" => "Déploiement serveur", "Durée" => 3 * 7, "Description" => "Cours déploiement serveur", "Note" => 17),
    array("id" => 6, "tId" => 5, "Nom" => "Javascript", "Durée" => 9 * 7, "Description" => "Cours de JS", "Note" => 19),
    array("id" => 7, "tId" => 6, "Nom" => "Linux", "Durée" => 2 * 7, "Description" => "Cours sur Linux", "Note" => 15),
    array("id" => 8, "tId" => 10, "Nom" => "Maquettage", "Durée" => 3 * 7, "Description" => "Cours maquettage", "Note" => 15),
    array("id" => 9, "tId" => 4, "Nom" => "PHP", "Durée" => 20 * 7, "Description" => "Cours PHP", "Note" => 15),
    array("id" => 10, "tId" => 7, "Nom" => "SCRUM", "Durée" => 5 * 7, "Description" => "Cours sur SCRUM", "Note" => 19),
    array("id" => 11, "tId" => 8, "Nom" => "Web Statique", "Durée" => 9 * 7, "Description" => "Cours web Statique", "Note" => 16)

);



$subjectsArray = array();

foreach ($subjects as $subject) :

    $oSubject = new Subject($subject["id"], $subject["tId"], $subject["Nom"], $subject["Durée"], $subject["Description"], $subject["Note"]);
    array_push($subjectsArray, $oSubject);

endforeach;




include "views/subjectsListView.php";
