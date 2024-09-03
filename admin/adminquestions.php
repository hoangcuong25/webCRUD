<?php
try {
    include '../includes/DatabaseConnection.php';
    include  '../includes/dbfunction.php';

    $sql = 'SELECT q.id, q.questiontext, u.name_user, u.email, modulename, q.questiondate, filetoupload
    FROM question as q JOIN users as u ON q.userid = u.id
    INNER JOIN module on moduleid = module.id';
    
    $system = $pdo->query($sql);
    $title = 'Question list';
    $totalquestion = totalquestion($pdo);

    ob_start();
    include '../templates/admin_questions.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/question_layout.html.php';
?>  