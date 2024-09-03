<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Form</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 p-6">
    <form action="" method="post" class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
        <input type="hidden" name="id" value="<?=$user['id']; ?>">
        
        <div class="mb-4">
            <label for="name_user" class="block text-gray-700 font-bold mb-2">Edit user's name here:</label>
            <textarea name="name_user" rows="3" cols="30" class="w-full p-2 border border-gray-300 rounded"><?=$user['name_user'] ?></textarea>
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Edit user's email here:</label>
            <textarea name="email" rows="3" cols="30" class="w-full p-2 border border-gray-300 rounded"><?=$user['email'] ?></textarea>
        </div>
        
        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-bold mb-2">Edit user's address here:</label>
            <textarea name="adress" rows="3" cols="30" class="w-full p-2 border border-gray-300 rounded"><?=$user['adress']?></textarea>
        </div>
        
        <div class="mb-4">
            <label for="pass" class="block text-gray-700 font-bold mb-2">Edit password here:</label>
            <textarea name="pass" rows="3" cols="30" class="w-full p-2 border border-gray-300 rounded"><?=$user['pass']?></textarea>
        </div>
        
        <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <i class="fas fa-save"></i> Save
        </button>
    </form>
</body>
</html>