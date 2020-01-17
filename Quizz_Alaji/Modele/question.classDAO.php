<?php

require_once '../db/db_connect.php';

class QuestionDAO extends DbConnect
{  // ... enfant de ...
    public function __construct()
    {
        parent::connect();
    }

    public function gettAllQuestions()
    {
        $sql = "SELECT * FROM questions"; // on prend toutes les questions
        $results = parent::executeQuery($sql); //
        return $results->fetchAll(); //affiche le résultat de la requête SQL (= tableau des questions dans le controler)
    }
}
