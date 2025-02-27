<?php

$semaine = array("lundi"=> "Monday", "mardi"=> "Tuesday", "mercredi"=>"Wednesday", "jeudi"=>"Thursday", "vendredi"=>"Friday", "samedi"=>"Saturday", "dimanche"=>"Sunday"); 

echo "<h2> Exercice 3 </h2> 
<table border=1px>
<tr>
    <td>Fr</td>
    <td>En</td>    
</tr>
";

foreach ($semaine as $jours=>$day) {

echo " 
    <tr>
    <td> $jours </td>
    <td> $day </td>
    </tr>
    ";
}

echo "
</table>
";

