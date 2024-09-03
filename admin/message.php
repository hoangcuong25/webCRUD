<?php
try {
    include '../includes/DatabaseConnection.php';
    include  '../includes/dbfunction.php';

    $sql = 'SELECT u.name_user, u.email, m.id, m.title, m.messagetext
    from users as u join messages as m on m.userid = u.id';

    $system = $pdo->query($sql);
    $title = 'Message list';
    $totalquestion = totalquestion($pdo);

    ob_start();
    include '../templates/message.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/adminlayout.html.php';
?>