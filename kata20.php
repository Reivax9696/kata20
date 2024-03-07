<?php


class Lluitador {

    public $nom;
    public $vida;
    public $forca;
    public $defensa;


    public function __construct($nom, $vida, $forca, $defensa){
        $this->nom = $nom;
        $this->vida = $vida;
        $this->forca = $forca;
        $this->defensa = $defensa;
    }


    //metodo de atacar

    //metodo de lucha
    public function lluita(LLuitador $lluitador1, Lluitador $lluitador2){
        $atacConecta = false;
        if ($lluitador1->forca == $lluitador2->forca){
            echo "Qualsevol dels dos pot guanyar";
        }else if ($lluitador1->forca > $lluitador2->forca){
            echo "El lluitador 1 te un 70% de guanyar.";
        } else if ($lluitador1->forca < $lluitador2->forca){
            echo "El lluitador 2 te un 70% de guanyar.";
        }
    }


   
}

$lluitador1 = new Lluitador ("Xavier", 10, 6, 8);
$lluitador2 = new Lluitador("Alex", 10, 4, 8);



    





























?>