<?php 

if (isset($_GET["N"]) && $_GET["N"] < 100 && $_GET["N"] > 1){
    
    $N = $_GET["N"]; 
    $number = 1;
    $Carre = $number * $number;
    $Cube = $number * $number * $number;
    
    echo "<h2>Tableau</h2>";
    echo "<table border = 2>";
    echo "<tr><th>Nombre</th><th>Carre</th><th>Cube</th></tr>";
    
    while ($number <= $N) {
    
    echo "<tr> ";
    echo  "<td>$number</td>";
    echo  "<td>$Carre</td>";
    echo  "<td>$Cube</td>";
    echo "</tr>";
    
    $number ++;
    $Carre = $number * $number;
    $Cube = $number * $number * $number;
    } 

} else {
    
    echo "Erreur : Affichez un nombre supérieur a 1 et inférieur a 100";

}