<?php

$FILE = "./departements.sqlite";


try{

    $db = new PDO("sqlite:$FILE");
    $requestSQLITE = "SELECT * FROM departements";
    $request = $db->query($requestSQLITE);

    echo"<table border = 1px
    <tr>
        <th>No</th>
        <th>Departements</th>
    </tr>"
    ;
    foreach($request as $line){
        echo "
            <tr>
                <td>$line[no]</td>
                <td>$line[nom]</td>
            </tr>
        ";
    }
    echo "</table>";
}catch (PDOException $e){
    exit('Non connecté à DB : '.$e->getMessage());
}



?>

