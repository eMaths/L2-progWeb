<?php

echo "<h2>Exercice 2</h2>";

function carre($n){
    return $n*$n;
}

function cube($n){
      return $n * $n * $n;
}
try{
  if (!isset($_GET["n0"])|| !is_numeric($_GET["n0"]) || !($_GET["n0"]<100)){
      throw new Exception("veillez saisir une valeur numérique <100");
  }
  else //c'est à dire si isset($_GET["n0"] et $_GET["n0"]<100
  { 
    echo "
    <table border = 1px>
    <tr>
        <td>Nombre</td>
        <td>Carré</td>
        <td>Cube</td>
      </tr>
    ";
    for($i=1; $i<=$_GET["n0"]; $i++) {
        $sq = carre($i);
        $cb = cube($i); 
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
  }
}
catch(Exception $e) {
    echo $e->getMessage() ;
  }


