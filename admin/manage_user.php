<?php
try {
    include '../includes/DatabaseConnection.php';
    include  '../includes/dbfunction.php';

    $sql = 'SELECT * from `users`';

    $system = $pdo->query($sql);
    $title = 'User list';
    $totalquestion = totalquestion($pdo);

    ob_start();
    include '../templates/manage_user.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/manage_user_layout.html.php';
?>