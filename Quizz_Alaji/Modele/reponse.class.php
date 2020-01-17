<?php

require_once 'hydrate.class.php';

class Reponse extends Entity
{
    public $id;
    public $reponse;
    public $idQ;
    public $justefaux;

    function __construct($data) //enfant de hydrate -> $data = paramètre de hydrate (car pas de paramètre défini)
    {
        parent::hydrate($data);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getidQ(){
        return $this->idQ;
    }

    public function getReponse()
    {
        return $this->reponse;
    }

    public function getJusteFaux()
    {
        return $this->justefaux;
    }

    public function setId($n)
    {
        $this->id = $n;
    }

    public function setReponse($n)
    {
        $this->reponse = $n;
    }

    public function setidQ($n){
        $this->idQ = $n;
    }

    public function setJusteFaux($n)
    {
        $this->justefaux = $n;
    }
}
