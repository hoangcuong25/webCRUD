<?php
// Check if the form has been submitted
if(isset($_POST['submit'])){
    try {
        include 'includes/DatabaseConnection.php';
        include 'includes/dbfunction.php';

        // Insert the user into the database using the provided form data
        insertuser($pdo, $_POST['name_user'], $_POST['email'], $_POST['adress'], $_POST['username'], $_POST['pass']);

        header('location: index.php');
        exit(); // Ensure the script stops executing after the redirect
    } catch (PDOException $e) {                 
        // Handle any PDO exceptions (database errors)
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
} else {
    // If the form is not submitted, display the form to add a new user

    include 'includes/DatabaseConnection.php';
    include 'includes/dbfunction.php';
    
    // Set the page title
    $title = 'Add a new user';
    
    // Start output buffering and include the form template
    ob_start();
    include 'templates/add_user.html.php';
    $output = ob_get_clean(); // Capture the form output into $output
}  
?>
