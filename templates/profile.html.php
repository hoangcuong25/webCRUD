<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Question List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="space-y-4">
            <?php foreach ($system as $user): ?>
                <div class="flex bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="../avt.jpg">
                    <div class="w-2/3 p-4">
                        Name: <?= htmlspecialchars($user['name_user'], ENT_QUOTES, 'UTF-8') ?><br>
                        Address: <?= htmlspecialchars($user['adress'], ENT_QUOTES, 'UTF-8') ?><br>
                        Date of birth: <?= htmlspecialchars($user['date_of_birth'], ENT_QUOTES, 'UTF-8') ?><br>
                        Username: <?= htmlspecialchars($user['name_user'], ENT_QUOTES, 'UTF-8') ?><br>
                        Password: *** <br>
                        Email: <a href="mailto:<?= htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8') ?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
