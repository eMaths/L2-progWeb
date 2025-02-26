<?php

try {
if( (isset($_GET['n']) && is_numeric($_GET['n']) ) && $_GET['n'] < 100)
    // is_numeric($_GET['n'] 
    
{
    $n = $_GET['n'];
    echo " 
    <table border='1px'><tr><td> Entiers </td><td> Carrés </td><td> Cubes </td></tr>"
    ;
            
    for( $i =1; $i <$n; $i++ ){
        $carre = $i * $i ;
        $cube = $i * $i * $i ;
        echo"<tr><td>$i</td><td>$carre</td><td>$cube</td></tr>";

    }
    echo"</table>";
}else {
    throw new Exception ("Le nombre que vou avez rentrez est plus grand ou égale à 100");
}
} catch (Exception $e){
    echo "Erreur : " . $e->getMessage();
}