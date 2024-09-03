<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title><?=$title?></title>
</head>
    <body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white p-4 text-center">
        <h1 class="text-2xl font-bold">Admin Site</h1>
        <p>Only Admin Can Come Here!!!</p>
    </header>
    <nav class="bg-blue-500 p-4">
        <ul class="flex space-x-4 justify-center">
            <li><a href="../admin/manage_user.php" class="text-white hover:text-gray-300"><i class="fas fa-users"></i> User List</a></li>
            <li><a href="../admin/add_user.php" class="text-white hover:text-gray-300"><i class="fas fa-user-plus"></i> Add User</a></li>
            <li><a href="../admin/admin_index.php" class="text-white hover:text-gray-300"><i class="fas fa-arrow-left"></i> Back</a></li>
        </ul>
    </nav>
    <main class="bg-white p-6 rounded-lg shadow-lg">
        <?=$output?>
    </main>
    <footer class="bg-blue-600 text-white text-center p-4">
        &copy; IJDB 2023
    </footer>
</body>
</html>