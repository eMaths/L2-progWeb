<?php

if ( 
	isset($_POST['n1'])  && 
	isset($_POST['n2']) && 
	is_numeric($_POST['n1']) && 
	is_numeric($_POST['n1']) 
   )
	{
	$a = $_POST['n1'];
	$b = $_POST['n2'];
	$sum = $a + $b;
	$product = $a * $b;
	echo " Le produit de $a et $b est $product <br> La somme de $a et $b est $sum";
}
