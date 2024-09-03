<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions Management</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-4">
        <p class="text-lg font-semibold mb-4"><?=$totalquestion?> Question(s) have been submitted.</p>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Image</th>
                        <th class="border px-4 py-2">Name</th>
                        <th class="border px-4 py-2">Module</th>
                        <th class="border px-4 py-2">Question</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">Delete</th>
                        <th class="border px-4 py-2">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($system as $question): ?>
                        <tr class="border-b">
                            <td class="py-2 px-4"><?=htmlspecialchars($question['id'], ENT_QUOTES, 'UTF-8')?></td>
                            <td class="py-2 px-4">
                                <img class="h-20 w-auto" src="../uploads/<?=htmlspecialchars($question['filetoupload'], ENT_QUOTES, 'UTF-8'); ?>" alt="Question Image" />
                            </td>
                            <td class="py-2 px-4"><?=htmlspecialchars($question['name_user'], ENT_QUOTES, 'UTF-8')?></td>
                            <td class="py-2 px-4"><?=htmlspecialchars($question['modulename'], ENT_QUOTES, 'UTF-8')?></td>
                            <td class="py-2 px-4"><?=htmlspecialchars($question['questiontext'], ENT_QUOTES, 'UTF-8')?></td>
                            <td class="py-2 px-4">
                                <a href="mailto:<?=htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8')?>" class="text-blue-500 hover:underline">
                                    <?=htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8')?>
                                </a>
                            </td>
                            <td class="py-2 px-4">
                                <form action="deletequestion.php" method="post">
                                    <input type="hidden" name="id" value="<?=$question['id']?>">
                                    <button type="submit" name="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </td>
                            <td class="py-2 px-4">
                                <form action="editquestion.php" method="get">
                                    <input type="hidden" name="id" value="<?=$question['id']?>">
                                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>