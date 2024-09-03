<?php
include '../includes/DatabaseConnection.php';
include '../includes/dbfunction.php';

try{
    if(isset($_POST['submit'])){
        $sql = 'UPDATE module SET modulename = :modulename, moduletext = :moduletext  WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':modulename', $_POST['modulename']);
        $stmt->bindValue(':moduletext', $_POST['moduletext']);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->execute();
        header('location: manage_module.php');
    }else{
        $module = getmodule($pdo, $_GET['id']);
        $title = 'Edit module';

        ob_start();
        include '../templates/edit_module.html.php';
        $output = ob_get_clean();
    }
}catch(PDOException $e){
    $title = 'error has occured';
    $output == 'Error editing question: ' . $e->getMessage();
}
include '../templates/manage_module_layout.html.php';
?>