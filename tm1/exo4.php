<!-- Exercice 4
Dans un fichier php initialisez une variable jours avec une valeur de votre choix. Puis écrivez un programme qui affiche
le message ‘Today is <jours_traduit_en_anglais>’ si la valeur de la variable jours
est bien un jours de la semaine en français, sinon on lèvera une exception avec un message d’erreur ‘value not set’
(utilisez try et catch). Testez le programme en faisant varier la valeur de la variable jours. -->


<?php

$jour = "samedi";
$semaine = array("luni"=>"monday","mardi"=>"tuesday","mercredi"=>"wendsday","jeudi"=>"thusrday","vendredi"=>"friday","samedi"=> "saturday","dimanche"=>"sunday");
$jour = "ha zabi hah";

try{
    if (!isset($semaine[$jour])) {
        throw new Exception("Ce n'et pas un jour de la semaine");
    }
    else {
        $day = $semaine[$jour];
        echo"Today we gonna marry alladin with the girl nextdoor $day";
    }
}
catch(Exception $e){
    echo $e -> getMessage();
}