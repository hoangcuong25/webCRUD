<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white p-4 text-center">
        <h1 class="text-2xl font-bold">The place can help you pass coursework</h1>
        <p>Don't Worry!!!</p>
    </header>
    <nav class="bg-blue-500 p-4">
        <ul class="flex space-x-4 justify-center">
            <li><a href="../public/public_index.php" class="text-white hover:text-gray-300"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="../public/public_questions.php" class="text-white hover:text-gray-300"><i class="fas fa-question"></i> Question</a></li>
            <li><a href="../public/my_question.php" class="text-white hover:text-gray-300"><i class="fas fa-user mr-2"></i>My Question</a></li>
            <li><a href="../public/addquestion.php" class="text-white hover:text-gray-300"><i class="fas fa-plus mr-2"></i> Add Question</a></li>
            <li><a href="../public/add_message.php" class="text-white hover:text-gray-300"><i class="fas fa-envelope mr-2"></i> Contact Us</a></li>
            <li><a href="../public/profile.php" class="text-white hover:text-gray-300"><i class="fas fa-user mr-2"></i>Profile</a></li>
            <li><a href="../logout.php" class="text-white hover:text-gray-300"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </nav>
    <main class="p-4">
        <?=$output?>
    </main>
    <footer class="bg-blue-600 text-white text-center p-4">
        &copy; IJDB 2023
    </footer>
</body>
</html>