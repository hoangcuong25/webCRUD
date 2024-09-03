<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-bold mb-4">Answer List</h1>
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Answer</th>
                    <th class="border px-4 py-2">Email</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
            <?php foreach ($system as $answer): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2"><?= htmlspecialchars($answer['id'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td class="px-4 py-2"><?= htmlspecialchars($answer['name_user'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td class="px-4 py-2"><?= htmlspecialchars($answer['answertext'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td class="px-4 py-2">
                        <a href="mailto:<?= htmlspecialchars($answer['email'], ENT_QUOTES, 'UTF-8') ?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($answer['email'], ENT_QUOTES, 'UTF-8') ?></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>