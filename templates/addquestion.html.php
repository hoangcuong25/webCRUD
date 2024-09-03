<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-4">
        <form action="" method="post" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="questiontext" class="block text-gray-700 font-bold mb-2">Type your question here:</label>
                <textarea name="questiontext" rows="5" cols="45" placeholder="Your question" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Select image:</label>
                <input type="file" name="filetoupload" class="w-full text-gray-700 px-3 py-2 border rounded-lg focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="moduleid" class="block text-gray-700 font-bold mb-2">Select a module:</label>
                <select name="moduleid" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:shadow-outline">
                    <option value="">Select a module</option>
                    <?php foreach($modules as $module): ?>
                        <option value="<?= htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?= htmlspecialchars($module['modulename'], ENT_QUOTES, 'UTF-8'); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <i class="fas fa-paper-plane"></i> Add Question
                </button>
            </div>
        </form>
    </div>
</body>
</html>
