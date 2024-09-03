<?php
session_start();
$id = $_SESSION['user'];
if(isset($_POST['submit'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';

        insertmessage($pdo, $_POST['title'], $_POST['messagetext'], $id);
        header('location: public_index.php');
    }catch (PDOException $e){                 
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else {
    include '../includes/DatabaseConnection.php';
    include '../includes/dbfunction.php';
    
    $title = 'Add a new message';
    $users = allusers($pdo);
    ob_start();
    include '../templates/add_message.html.php';
    $output = ob_get_clean();
}  
include '../templates/publiclayout.html.php';
?>