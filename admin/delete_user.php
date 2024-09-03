<?php
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';

        deleteuser($pdo, $_POST['id']);
        header('location: manage_user.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
    
include '../templates/manage_user_layout.html.php';
?>  