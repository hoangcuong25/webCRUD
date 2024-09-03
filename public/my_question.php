<?php
session_start();
$id = $_SESSION['user'];

try {
    include '../includes/DatabaseConnection.php';
    include '../includes/dbfunction.php';

    // Correct SQL statement with joins and where clause
    $sql = 'SELECT question.id, questiontext, name_user, email, modulename, questiondate, filetoupload
            FROM question
            INNER JOIN users ON question.userid = users.id
            INNER JOIN module ON question.moduleid = module.id
            WHERE Users.id = :id';

    // Prepare and execute the statement with the correct id
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    // Fetch the result
    $system = $stmt->fetchAll();

    $title = 'Question list';
    $totalquestion = totalquestion($pdo);

    ob_start();
    include '../templates/my_question.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include '../templates/publiclayout.html.php';
?>
