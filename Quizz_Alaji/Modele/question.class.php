<?php

require_once 'hydrate.class.php';

class Questions extends Entity
{
    public $id;
    public $question;
    public $categorie;

    function __construct($data) //enfant de hydrate -> $data = paramètre de hydrate (car pas de paramètre défini)
    {
        parent::hydrate($data);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setId($n)
    {
        $this->id = $n;
    }

    public function setQuestion($n)
    {
        $this->question = $n;
    }

    public function setCategorie($n)
    {
        $this->categorie = $n;
    }

    public function DisplayQuestion(){
        ?>

        <h1> <?php 
    }
}
