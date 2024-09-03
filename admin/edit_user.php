<?php
include '../includes/DatabaseConnection.php';
include '../includes/dbfunction.php';

try{
    if(isset($_POST['submit'])){
        $sql = 'UPDATE users SET name_user = :name_user, email = :email, adress = :adress, pass = :pass  WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name_user', $_POST['name_user']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':adress', $_POST['adress']);
        $stmt->bindValue(':pass', $_POST['pass']);
        $stmt->bindValue(':id', $_POST['id']);
        $stmt->execute();
        header('location: manage_user.php');
    }else{
        $user = getuser($pdo, $_GET['id']);
        $title = 'Edit user';

        ob_start();
        include '../templates/edit_user.html.php';
        $output = ob_get_clean();
    }
}catch(PDOException $e){
    $title = 'error has occured';
    $output == 'Error editing question: ' . $e->getMessage();
}
include '../templates/manage_user_layout.html.php';
?>