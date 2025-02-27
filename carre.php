<?php 

if (isset($_GET["N"])&& $_GET["N"]< 100) {
    $N=  $_GET["N"];
    $index =  1; 
    $carre = $index * $index;
    $cube = $index * $index * $index;

    echo "<h2> Cubes & Carres </h2>";
    echo"<table border ='1.5'>";
    echo "<tr><th> Nombre</tr></th><tr><th> Carre</tr></th><tr><th> Cube</tr></th>";
    while ($index <= $N) { 
        echo "<tr>";
        echo "  <td>$index</td>";
        echo "<td>$carre</td>";
        echo "<td>$cube</td>";
        $index ++;
        $carre = $index * $index;
        $cube = $index * $index * $index;
    } 
    // echo "</table>";
}else {
        echo "<p>Erreur : Veuillez remplir tous les champs.</p>";

}
