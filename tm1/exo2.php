<?php

echo"EXO 2";

echo "<table border = '4px'";

echo "<thead> ";
echo "<tr>
        <th> Nombre </th>
        <th> Carré </th>
        <th> Cube </th>
      </tr>";
echo "</thead>";
echo "<tbody>";
for ($i = 1; $i < 20; $i++) {
    $carre = $i * $i;
    $cube  = $i * $i * $i;
    echo "<tr> ";
    echo "<td> $i </td>";
    echo "<td> $carre </td>";
    echo "<td> $cube</td>";
    echo " </tr> ";
}
echo "</tbody>";
echo "</table>";

    