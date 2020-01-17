<?php
require_once '../Modele/question.class.php';
require_once '../Modele/question.classDAO.php';
require_once '../Modele/reponse.class.php';
require_once '../Modele/reponse.classDAO.php';

$questionDAO = new QuestionDAO(); //se connecte à la base de données car QuestionDAO enfant de DbConnect
$reponseDAO = new ReponseDAO(); //se connecte à la base de données car ReponsesDAO enfant de DbConnect

$arrQuestions = $questionDAO->getAllQuestions(); // va chercher toutes les questions + met dans un tableau
$arrReponses = $reponseDAO->getAllReponses(); // va chercher toutes les réponses + met dans un tableau

foreach ($arrQuestions as $key => $value) {
    $questions[] = new Questions($value);
}
foreach ($arrReponses as $key => $value) {
    $reponses[] = new Reponses($value);
}

var_dump($reponses);

foreach ($questions as $key => $value) {
    echo '<h1> Question : ' . $value->getQuestion() .'</h1>';
    echo '<h3> catégorie - ' . $value->getCategorie() .'</h3>';
    foreach ($reponses as $key => $value) {
        echo $value->getReponse() .' - ';
    }
}