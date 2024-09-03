<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Question Form</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 p-6">
    <form action="" method="post" class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
        <input type="hidden" name="id" value="<?= $question['id']; ?>">
        
        <div class="mb-4">
            <label for="questiontext" class="block text-gray-700 font-bold mb-2">Edit your question here:</label>
            <textarea name="questiontext" rows="3" cols="40" class="w-full p-2 border border-gray-300 rounded"><?= $question['questiontext'] ?></textarea>
        </div>
        <select name="moduleid" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:shadow-outline">
                <?php foreach ($modules as $module): ?>
                            <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8')?>" <?= $question['moduleid'] == $module['id'] ? 'selected' : '' ?>>
                                <?=htmlspecialchars($module['modulename'], ENT_QUOTES, 'UTF-8')?>
                            </option>
                        <?php endforeach; ?>
            </select><br>
        
        <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <i class="fas fa-save"></i> Save
        </button>
    </form>
</body>
</html>