<?php
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';

        $row = getquestion($pdo, $_POST['id']);
        unlink('../uploads/'.$row['filetoupload']);

        deletequestion($pdo, $_POST['id']);
        header('location: public_questions.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
    
include '../templates/publiclayout.html.php';
?>  