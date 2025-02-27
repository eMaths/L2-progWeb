<?php

$FILE ="departements.sqlite";

try{

    $bd= new PDO("sqlite:$FILE");

    $requetSQLITE="SELECT * FROM departements";
    $requet =$bd->query($requetSQLITE);


    echo"<table border='2px'>
    <tr><th>No</th><th>Nom</th></tr>";

    foreach($requet as $ligne){
        echo"
        <tr> 
            <td>$ligne[no]</td>
            <td>$ligne[nom]</td>
        </tr>
        ";
    }
    echo"</table>";

}
catch (PDOException $e){
    exit("Non connecté à la BD : ".$e->getMessage());
}


