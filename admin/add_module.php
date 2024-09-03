<?php
if(isset($_POST['submit'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/dbfunction.php';

        insertmodule($pdo, $_POST['modulename']);
        header('location: manage_module.php');
    }catch (PDOException $e){                 
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else {
    include '../includes/DatabaseConnection.php';
    include '../includes/dbfunction.php';
    
    $title = 'Add a new module';
    $users = allusers($pdo);
    $modules = allmodule($pdo);
    ob_start();
    include '../templates/add_module.html.php';
    $output = ob_get_clean();
}  
include '../templates/manage_module_layout.html.php';
?>