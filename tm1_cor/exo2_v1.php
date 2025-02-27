<?php

echo "<h2> Exercice 2 </h2> 

<table border=1px>
<tr>
    <td>Nombre</td>
    <td>Carré</td>
    <td>Cube</td>
  </tr>
";

for($i=1; $i<=20; $i++) {
    $sq = $i * $i;
    $cb = $i * $i * $i; 
    echo "
    <tr>
    <td> $i </td>
    <td> $sq </td>
    <td> $cb </td> 
    </tr>
    ";
}

echo "
</table>
";

