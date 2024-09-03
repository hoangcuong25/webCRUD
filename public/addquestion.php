<?php
session_start();
$id = $_SESSION['user'];
if(isset($_POST['questiontext'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';

        insertquestion($pdo, $_POST['questiontext'], $id, $_POST['moduleid'], $_FILES['filetoupload']['name']);
        include '../includes/uploadfile.php';
        header('location: public_questions.php');
    }catch (PDOException $e){                 
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else {
    include '../includes/DatabaseConnection.php';
    include '../includes/dbfunction.php';
    
    $title = 'Add a new question';
    $users = allusers($pdo);
    $modules = allmodule($pdo);
    ob_start();
    include '../templates/addquestion.html.php';
    $output = ob_get_clean();
}  
include '../templates/publiclayout.html.php';
?>