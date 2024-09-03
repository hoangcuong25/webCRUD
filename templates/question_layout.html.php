<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <title><?=$title?></title>
    </head>
        <body class="bg-gray-100 text-gray-800">
        <header class="bg-blue-600 text-white p-4 text-center">
        <h1 class="text-2xl font-bold">Admin Site</h1>
        <p>Only Admin Can Come Here!!!</p>
    </header>
        <nav class="bg-blue-500 py-4">
            <ul class="flex justify-center">
                <li class="mr-4"><a href="../admin/adminquestions.php" class="text-white hover:text-gray-300"><i class="fas fa-list mr-2"></i>Question List</a></li>
                <li class="mr-4"><a href="../admin/addquestion.php" class="text-white hover:text-gray-300"><i class="fas fa-plus mr-2"></i>Add Question</a></li>
                <li><a href="../admin/admin_index.php" class="text-white hover:text-gray-300"><i class="fas fa-arrow-left mr-2"></i>Back</a></li>
            </ul>
        </nav>
        <main class="flex-1 p-4">
            <?=$output?>
        </main>
        <footer class="bg-blue-600 text-white text-center p-4">
        &copy; IJDB 2023
    </footer>
    </body>
</html>

