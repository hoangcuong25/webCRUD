<?php
try {
    include '../includes/DatabaseConnection.php';
    include '../includes/dbfunction.php';
    
    $title = 'Answer list';
    
    $sql = "SELECT answertext, a.id, name_user, email
    FROM answer as a JOIN users as u ON a.userid = u.id
    WHERE questiontid = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id']]);
    
    $system = $stmt->fetchAll(); // Fetch all results

    ob_start();
    include '../templates/view_answer.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/publiclayout.html.php';
?>
