<?php
include '../includes/DatabaseConnection.php';
include '../includes/dbfunction.php';

try{
    if(isset($_POST['submit'])){
        $sql = 'UPDATE question SET questiontext = :questiontext, moduleid = :moduleid WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':questiontext', $_POST['questiontext']);
        $stmt->bindValue(':moduleid', $_POST['moduleid']);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->execute();
        header('location: adminquestions.php');
    }else{
        $question = getquestion($pdo, $_GET['id']);
        $title = 'Edit question';
        $modules = allmodule($pdo);

        ob_start();
        include '../templates/editquestion.html.php';
        $output = ob_get_clean();
    }
}catch(PDOException $e){
    $title = 'error has occured';
    $output == 'Error editing question: ' . $e->getMessage();
}
include '../templates/adminlayout.html.php';
?>