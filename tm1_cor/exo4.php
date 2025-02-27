<?php


$semaine = array("lundi"=> "Monday", "mardi"=> "Tuesday", "mercredi"=>"Wednesday", "jeudi"=>"Thursday", "vendredi"=>"Friday", "samedi"=>"Saturday", "dimanche"=>"Sunday"); 

echo "<h2> Exercice 4 </h2>";  

$jours ="plutondi"; //test avec un non-jour de la semaine

try{
    if (!isset($semaine[$jours])){
        throw new Exception("value not set");  
    }
    else {
        $day=$semaine[$jours];
        echo "Today is $day"; 
    }  
}    
catch(Exception $e){
    echo $e->getMessage(); 
}


