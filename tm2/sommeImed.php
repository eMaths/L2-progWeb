<?php 

if (isset($_POST["nombre1"])&&isset($_POST["nombre2"])){
    $nombre1 =  $_POST["nombre1"];
    $nombre2 =  $_POST["nombre2"]; 
    $somme = $nombre1 + $nombre2;
    $produit = $nombre1 * $nombre2;
    echo "<h2>Résultats</h2>";
        echo "<p>La somme de $nombre1 et $nombre2 est : <strong>$somme</strong></p>";
        echo "<p>Le produit de $nombre1 et $nombre2 est : <strong>$produit</strong></p>";
        echo "<br><a href='somme_form.html'>Revenir au formulaire</a>";
    } else {
        echo "<p>Erreur : Veuillez remplir tous les champs.</p>";

}

