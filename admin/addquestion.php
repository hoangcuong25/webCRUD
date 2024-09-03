<?php
session_start();
$id = $_SESSION['user'];
if(isset($_POST['submit'])){
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';
        
        insertquestion($pdo, $_POST['questiontext'], $id, $_POST['moduleid'], $_FILES['filetoupload']['name']);
        include '../includes/uploadfile.php';
        header('location: adminquestions.php');

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
include '../templates/question_layout.html.php';
?>