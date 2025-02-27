

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TM1 corrigé</title>


<style>
table, th, td {
  border:1px solid ;
}
</style>

</head>
<body>


<h2> Exercice 2 </h2> 
<table>
<tr>
    <td>Nombre</td>
    <td>Carré</td>
    <td>Cube</td>
  </tr>

<?php
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

?>

</table>
