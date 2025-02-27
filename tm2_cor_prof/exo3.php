<?php
$file = "bd/departements.sqlite";

echo "<h2>Exercice 3</h2><br>";

echo "<b>Les départements de France</b> <br><br>";

try{
    $db = new PDO("sqlite:$file");

    print "<table border = 1>"; 
    print "<tr><td>No </td><td> Nom </td></tr>";
    
    $result = $db-> query('SELECT no, nom FROM departements');
    foreach($result as $row){
        print "<tr><td>".$row['no']."</td>"; 
        print "<td>".$row['nom']."</td></tr>"; 

    } 
    print "</table>"; 
}
catch(PDOException $e)
{
    exit("Erreur de connexion" .$e->getMessage());
}

