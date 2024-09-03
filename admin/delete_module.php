<?php
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';

        deletemodule($pdo, $_POST['id']);
        header('location: manage_module.php');
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
    
include '../templates/manage_module_layout.html.php';
?>  