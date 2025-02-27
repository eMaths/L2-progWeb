<?php

$FILE="inscr.sqlite";

$db= new PDO("sqlite:$FILE");

$db->exec("
DROP TABLE  IF EXISTS inscr ;
CREATE TABLE inscr (id INTEGER PRIMARY KEY, nom text, prenom text, email text)
");

try {
    

    if (isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['email'])
    ){
        echo "<b>Inscription complétée</b> <br><br>"; 
        echo "<b>Liste des participants</b>: <br><br>";

        $n = $_POST["nom"];
        $p = $_POST["prenom"];
        $m = $_POST["email"];

        $db->exec("INSERT INTO inscr (nom, prenom, email) VALUES ('$n', '$p', '$m')");

        $reçu = $db->query("SELECT * FROM inscr");

        echo "<table border ='1px'> <tr><th>No</th><th>Nom</th><th>Prenom</th><th>Adresse mail</th></tr>";
        
        foreach ($reçu as $ligne){
            echo " <tr><td>$ligne[id]</td><td>$ligne[nom]</td><td>$ligne[prenom]</td><td>$ligne[email]</td>";
        }

        echo "</table>";
    }
    else throw new Exception ("ERROR : FIELDS NOT SET");
}
catch (PDOException $e){
    echo "Error : " .$e->getMessage();
   
}

