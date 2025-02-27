<!-- Définir une classe Monstre avec deux attributs nom et catchPhrase, un constructeur et deux accesseurs get_name et
get_phrase qui permettent d’accéder aux attributs d’un monstre. En suite créer le monstre Dracula dont la catch phrase
sera ‘je vais vous mordre ! ‘ et affichez le message ‘Je suis Dracula, je vais vous mordre’. -->

<?php
class Monstre {
    private $nom;
    private $catchPhrase;

    function  __construct($name, $msg){
        $this->nom = $name;
        $this->catchPhrase = $msg;
    }

    function get_name(){
        return $this->nom;
    }

    function get_catchPhrase(){
        return $this->catchPhrase;
    }
}
$dracula = new Monstre("dracula", "Je vais te niquer ta race");

$name =$dracula->get_name();

$mg =$dracula->get_catchPhrase();

echo"Je suis $name et $mg";