<?php

$file = "bd/formulaire.sql";
$db = new PDO("sqlite:$file");

//Executer une fois pour créer la table: 
//$db-> exec("CREATE TABLE participants(prenom text, nom text, email text)");

echo "<h2>Exercice 5</h2>";

if (isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["email"])){

   echo "<b>Inscription complétée</b> <br><br>"; 
   echo "<b>Liste des participants</b>: <br><br>";

    $prenom = $_POST["prenom"]; 
    $nom = $_POST["nom"];
    $email = $_POST["email"];
   
    $db-> exec("INSERT INTO participants (prenom, nom, email) VALUES 
        ('$prenom', '$nom', '$email')" 
    );
}

 print "<table border=1px>"; 
    print "<tr> <td> Prénom </td> <td>Nom</td> <td> Email</td> </tr>";
    
    $result = $db-> query('SELECT * FROM participants');
    foreach($result as $row){
        print "<tr> <td>".$row["prenom"]."</td>"; 
        print "<td>".$row["nom"]."</td>";
        print "<td>".$row["email"]."</td>  </tr>"; 

    } 
print "</table>";

//executer si on veut effacer la table
//$db-> exec("DELETE FROM participants;");

