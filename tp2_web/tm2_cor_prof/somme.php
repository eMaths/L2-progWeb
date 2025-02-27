<?php

echo "<h2>Exercice 1</h2>"; 

try{
    if (isset($_POST["n1"]) && isset($_POST["n2"])) {
        if (is_numeric($_POST["n1"]) && is_numeric($_POST["n2"])){
        $somme = $_POST["n1"] + $_POST["n2"];
        $product = $_POST["n1"] * $_POST["n2"];
    
        echo "La somme est: $somme <br>";
        echo "Le produit est: $product"; 
        }
        else {
            throw new Exception("Erreur : veuillez indiquer deux valeurs numériques.");
        }
    }
}
catch (Exception $e) {
    echo $e->getMessage();
}