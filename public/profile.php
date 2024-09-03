<?php
session_start();
$id = $_SESSION['user'];
try {
    include '../includes/DatabaseConnection.php';
    include '../includes/dbfunction.php';
    
    $title = 'Profile';
    $sql = "SELECT * FROM users Where id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $system = $stmt->fetchAll();

    ob_start();
    include '../templates/profile.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/publiclayout.html.php';
?>