<?php
if(isset($_POST['submit'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';

        insertuser($pdo, $_POST['name_user'], $_POST['email'], $_POST['adress'], $_POST['username'], $_POST['pass'] );
        header('location: manage_user.php');
    }catch (PDOException $e){                 
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else {
    include '../includes/DatabaseConnection.php';
    include '../includes/dbfunction.php';
    
    $title = 'Add a new user';
    ob_start();
    include '../templates/add_user.html.php';
    $output = ob_get_clean();
}  
include '../templates/manage_user_layout.html.php';
?>