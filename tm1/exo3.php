<!--  Créer un array associant à chaque jours de la semaine sa traduction en francais, puis affichez sur une page web un
tableau comme dans la figure 2. --> 
<?php

$semaine = array("lundi"=> "Monday", "mardi"=> "Tuesday", "mercredi"=>"Wednesday", "jeudi"=>"Thursday", "vendredi"=>"Friday", "samedi"=>"Saturday", "dimanche"=>"Sunday"); 

echo "<table border = 2px>
<thead>
        <tr>
            <th> Fr </th>
            <th> En </th>
        </tr>
</thead>";

foreach ($semaine as $jour => $day) {
    echo "<tr>
            <td> $jour </td>
            <td> $day </td>
         </tr>";
}

echo "</table>";