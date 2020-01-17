<?php

require_once '../db/db_connect.php';

class ReponseDAO extends DbConnect
{  // ... enfant de ...
    public function __construct()
    {
        parent::connect();
    }

    public function getAllReponses()
    {
        $sql = "SELECT * FROM reponses"; // on prend toutes les questions
        $results = parent::executeQuery($sql); //
        return $results->fetchAll(); //affiche le résultat de la requête SQL (= tableau des questions dans le controler)
    }
}
