<?php
$file = "bd/produits.sqlite";

echo "<h2>Exerice 4</h2><br>";

try{
    $db = new PDO("sqlite:$file");

    if (isset($_POST["n1"])&&is_numeric($_POST["n1"])){
    
    $prixMax = $_POST["n1"];     
    echo "Liste de produits dont le prix est inférieur à $prixMax euros";

    print "<table border =1px>"; 
    print "<tr><td>produit </td><td> prix </td></tr>";
    
    $result = $db-> query("SELECT nom, prix FROM produits WHERE prix < $prixMax");

    foreach($result as $row){
        print "<tr><td>".$row['nom']."</td>"; 
        print "<td>".$row['prix']."</td></tr>"; 

    } 
    print "</table>"; 
}
}
catch(PDOException $e)
{
    exit("Erreur de connexion" .$e->getMessage());
}

