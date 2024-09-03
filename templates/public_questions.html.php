<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Question List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="space-y-4">
            <?php foreach ($system as $question): ?>
                <div class="flex bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="w-2/6 bg-cover" style="background-image: url('../uploads/<?= htmlspecialchars($question['filetoupload'], ENT_QUOTES, 'UTF-8') ?>');">
                    </div>
                    <div class="w-2/3 p-4">
                        <h2 class="text-gray-900 font-bold text-2xl"><?= htmlspecialchars($question['modulename'], ENT_QUOTES, 'UTF-8')  ?></h2>
                        <p class="text-gray-700"><?= htmlspecialchars($question['questiondate'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p class="text-gray-700"><?= htmlspecialchars($question['name_user'], ENT_QUOTES, 'UTF-8') ?></p>
                        <div class="mt-2">
                            <a href="mailto:<?= htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8') ?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8') ?></a>
                        </div>
                        <p class="mt-2 text-gray-600"><?= htmlspecialchars($question['questiontext'], ENT_QUOTES, 'UTF-8') ?></p>
                        <div class="flex items-center justify-between mt-3">

                        <div class="flex space-x-2 mt-4">
                            <a href="view_answer.php?id=<?= isset($question['id']) ? $question['id'] : '' ?>" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View Answer</a>
                            <a href="answer.php?id=<?= isset($question['id']) ? $question['id'] : '' ?>" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Answer</a>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
