<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Module</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-4">
        <form action="" method="post" class="bg-white p-6 rounded-lg shadow-md">
            <input type="hidden" name="id" value="<?=$module['id'];?>">
            <label for="module" class="block text-gray-700 font-bold mb-2">Edit Module Name here:</label>
            <textarea name="modulename" rows="3" cols="30" class="w-full p-2 border rounded mb-4"><?=$module['modulename']?></textarea>

            <label for="module" class="block text-gray-700 font-bold mb-2">Edit Module Name here:</label>
            <textarea name="moduletext" rows="3" cols="30" class="w-full p-2 border rounded mb-4"><?=$module['moduletext']?></textarea>

            <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <i class="fas fa-save"></i> Save
            </button>
        </form>
    </div>
</body>
</html>