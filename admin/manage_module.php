<?php
try {
    include '../includes/DatabaseConnection.php';
    include  '../includes/dbfunction.php';

    $sql = 'SELECT * from `module`';

    $system = $pdo->query($sql);
    $title = 'Module list';
    $totalquestion = totalquestion($pdo);

    ob_start();
    include '../templates/manage_module.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/manage_module_layout.html.php';
?>