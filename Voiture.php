<?php
class Voiture
{
    // Properties
    public $model;
    public $mark;
    public $color;
    public $year;
    function __construct($c_model, $c_mark, $c_color, $c_year)
    {
        $this->modele = $c_model;
        $this->marque = $c_mark;
        $this->couleur = $c_color;
        $this->annee = $c_year;
    }

    // Properties
    function getModele()
    {
        return $this->modele;
    }
    function setModele($p_model)
    {
        $this->modele = $p_model;
    }
    function getMarque()
    {
        return $this->marque;
    }
    function setMarque($p_mark)
    {
        $this->marque = $p_mark;
    }
    function getCouleur()
    {
        return $this->couleur;
    }
    function setCouleur($p_color)
    {
        $this->couleur = $p_color;
    }
    function getAnnee()
    {
        return $this->annee;
    }
    function setAnnee($p_year)
    {
        $this->annee = $p_year;
    }

    function displayAll()
    {
        echo $this->marque . " " . $this->modele . " " . $this->couleur . " de " . $this->annee;
        return;
    }

    public $_vitesse = 0;
    function plusVitesse()
    {
        $this->_vitesse = $this->_vitesse + 50;
    }

    public $_etat = 0;
    function setEtat($_etat)
    {
        $this->_etat = $_etat;
    }
    function getEtat()
    {
        return $this->_etat;
    }


    // Methods
    function Demarrer()
    {
        if ($this->_etat == false) {
            $this->_etat = 1;
            echo $this->displayAll() . " démarre.";
        } elseif ($this->_vitesse > 0) {
            echo "Tu roules déjà ducon...";
        } else {
            echo "Tu as déjà démarré !";
        }
    }

    function Accelerer()
    {
        if ($this->_etat == true) {
            if ($this->_vitesse < 100) {
                $this->plusVitesse();
                echo $this->marque . " " . $this->modele . " " . $this->couleur . " de " . $this->annee . " accélère. <br>" . $this->marque . " " . $this->modele . " " . $this->couleur . " de " . $this->annee . " est maintenant à " . $this->_vitesse . " km/h.";
            } else {
                echo $this->marque . " " . $this->modele . " " . $this->couleur . " de " . $this->annee . " est déjà au plafond !";
            }
        } else {
            echo "Faudrait déjà penser à démarrer le moteur.";
        }
    }

    function Decelerer()
    {
        if ($this->_etat == true) {
            if ($this->_vitesse > 0) {
                $this->_vitesse = 0;
                echo $this->marque . " " . $this->modele . " " . $this->couleur . " de " . $this->annee . " décélère. <br> Elle est à l'arrêt.";
            } else {
                echo "T'es déjà à l'arrêt !";
            }
        } else {
            echo "Il faudrait commencer par démarrer le moteur !";
        }
    }

    function Eteindre()
    {
        if ($this->_etat == true) {
            if ($this->_vitesse > 0) {
                echo "Non mais t'es malade de vouloir éteindre le moteur à cette vitesse ?! Ralentis d'abord !";
            } else {
                $this->_etat = 0;
                echo $this->marque . " " . $this->modele . " " . $this->couleur . " de " . $this->annee . " a le moteur éteint.";
            }
        } else {
            echo "Le moteur est déjà éteint.";
        }
    }
}

$voit = new Voiture("AVTR", "Mercedes", "Rouge", "2020");
// $voit->Demarrer();
// echo "<br>";
// $voit->Demarrer();
// echo "<br>";
// $voit->Eteindre();
// echo "<br>";
// $voit->Accelerer();
// echo "<br>";
// $voit->Demarrer();
// echo "<br>";
// $voit->Accelerer();
// echo "<br>";
// $voit->Accelerer();
// echo "<br>";
// $voit->Accelerer();
// echo "<br>";
// $voit->Decelerer();
// echo "<br>";
// $voit->Decelerer();
// echo "<br>";
// $voit->Decelerer();
// echo "<br>";
// $voit->Demarrer();
// echo "<br>";
// $voit->Eteindre();
// echo "<br>";
// $voit->Accelerer();

$voit->Demarrer();
$voit->Accelerer();
$voit->Accelerer();
$voit->Accelerer();

$voit->Eteindre();


// Classe A Mercedes démarre.
// Classe A Mercedes ne peux pas démarrer elle est déjà entrain de faire autre chose.
// Classe A Mercedesa eteint son moteur.
// Allume déjà le moteur !
// Classe A Mercedes démarre.
// Classe A Mercedes accelere
// Classe A Mercedes est maintenant a 50km/h
// Classe A Mercedes accelere
// Classe A Mercedes est maintenant a 100km/h
// Classe A Mercedes ne peux pas accélerer, elle est déjà a fond
// Classe A Mercedes decelere
// Classe A Mercedes est maintenant a 0km/h
// Classe A Mercedes est a l'arret
// Classe A Mercedes est a l'arret
// Classe A Mercedes ne peux pas démarrer elle est déjà entrain de faire autre chose.
// Classe A Mercedesa eteint son moteur.
// Allume déjà le moteur !
