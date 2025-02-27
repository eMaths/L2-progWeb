<?php 

class Monstre {

    private $name;
    private $msg; 

    function __construct($name, $msg)
    {
    $this->name = $name; 
    $this->msg = $msg; 
    } 

    function get_name(){
        return $this->name; 
    }

    function get_phrase(){
        return $this->msg;  
    }
}
   
$dracula= new Monstre("Dracula", "je vais vous mordre!"); 

$nom=$dracula->get_name(); 

$phrase=$dracula->get_phrase();  
echo "Je suis $nom, $phrase"; 

