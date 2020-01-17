<?php
require_once '../Modele/question.class.php';
require_once '../Modele/question.classDAO.php';

$questionDAO = new QuestionDAO(); //se connecte à la base de données car QuestionDAO enfant de DbConnect

$arrQuestions = $questionDAO->gettAllQuestions(); // va chercher toutes les questions + met dans un tableau

foreach ($arrQuestions as $key => $value) {
    $questions[] = new Questions($value);
}

foreach ($questions as $key => $value) {
    echo '<h1> Question : ' . $value->getQuestion() .'</h1>';
    echo '<h3> catégorie - ' . $value->getCategorie() .'</h3>';
}