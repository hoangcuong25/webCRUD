<?php
session_start();
$id = $_SESSION['user'];
if(isset($_POST['submit'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';
        insertanswer($pdo, $_POST['answertext'], $id, $_POST['id'] );
        header('location: public_questions.php');

    }catch (PDOException $e){                 
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else {
    include '../includes/DatabaseConnection.php';
    include '../includes/dbfunction.php';
    
    $title = 'Add a new question';
    $question = getquestion($pdo, $_GET['id']);
    $users = allusers($pdo);
    $modules = allmodule($pdo);

    ob_start();
    include '../templates/answer.html.php';
    $output = ob_get_clean();
}  
include '../templates/publiclayout.html.php';
?>