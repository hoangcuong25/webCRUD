<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title><?=$title?></title>
</head>
<body class="bg-gray-100 p-6">
    <header class="bg-blue-500 text-white p-4 rounded">
        <h1 class="text-3xl font-bold"><i class="fas fa-graduation-cap"></i> The place can help you pass coursework</h1>
    </header> 
    <main class="mt-6 bg-white p-6 rounded-lg shadow-lg">
        <?=$output?>
    </main>
    <footer class="bg-blue-600 text-white text-center p-4">
        &copy; IJDB 2023
    </footer>
</body>
</html>