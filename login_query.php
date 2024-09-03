<?php
// Start the session
session_start();

// Include the database connection file
require_once 'includes/DatabaseConnection.php';

// Check if the login form has been submitted
if(ISSET($_POST['login'])){

    // Check if both username and password fields are filled
    if($_POST['username'] != "" || $_POST['pass'] != ""){
		
        // Retrieve the username and password from the POST request
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        // SQL query to check if the user exists in the database
        $sql = "SELECT * FROM `users` WHERE `username`=? AND `pass`=? ";
        $query = $pdo->prepare($sql);
        // Execute the query with the provided username and password
        $query->execute(array($username, $pass));
        
        // Get the number of rows returned by the query
        $row = $query->rowCount();
        // Fetch the user data
        $fetch = $query->fetch();
        
        // If one user is found
        if($row == 1) {
            
            // Redirect based on user role
            if ($fetch['role'] == 1){
                $_SESSION['role'] = $fetch['role'];
                $_SESSION['user'] = $fetch['id'];

                header("location: admin/admin_index.php");
            }
            elseif($fetch['role'] == 0){
                $_SESSION['role'] = $fetch['role'];
                $_SESSION['user'] = $fetch['id'];
                header("location: public/public_index.php");
            }
        } 
        // If no user is found
        else {
            echo "
            <script>alert('Invalid username or password')</script>
            <script>window.location = 'index.php'</script>
            ";
        }
    }
    // If required fields are not filled
    else {
        echo "
        <script>alert('Please complete the required field!')</script>
        <script>window.location = 'index.php'</script>
        ";
    }
}
?>
