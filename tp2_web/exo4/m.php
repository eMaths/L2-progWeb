<?php

$FILE="produits.sqlite";

try{
    $db = new PDO("sqlite:$FILE");
    if ( isset($_POST['n'])  && 
         is_numeric($_POST['n']) ){

                 
        $prixMax = $_POST['n'];
        $rqst="SELECT nom, prix FROM produits WHERE prix <= $prixMax  ORDER BY prix ASC";

        $prices= $db->query($rqst);
        echo "<table border='1px'>
                <tr><th>Nom</th><th>Prix</th></tr>"
                ;
        foreach($prices as $row){
            echo "<tr><td>$row[nom]</td><td>$row[prix]</td></tr>";
        }
        echo "</table>";
      } else {
        echo "Erroro";
      }


} catch (PDOException $e) { 
    echo "Error". $e->getMessage() ."";
}