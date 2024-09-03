<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-center">
                <i class="fas fa-th-list"></i> Module Management
            </h1>
        </header>
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Module Name</th>
                    <th class="border px-4 py-2">Module Description/th>
                    <th class="border px-4 py-2">Delete</th>
                    <th class="border px-4 py-2">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($system as $module): ?>
                    <tr class="hover:bg-gray-100">
                        <td class="border px-4 py-2"><?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8')?></td>
                        <td class="border px-4 py-2"><?=htmlspecialchars($module['modulename'], ENT_QUOTES, 'UTF-8')?></td>
                        <td class="border px-4 py-2"><?=htmlspecialchars($module['moduletext'], ENT_QUOTES, 'UTF-8')?></td>
                        <td class="border px-4 py-2 text-center">
                            <form action="delete_module.php" method="post">
                                <input type="hidden" name="id" value="<?=$module['id']?>">
                                <button type="submit" class="text-red-600 hover:text-red-800">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <form action="edit_module.php" method="get">
                                <input type="hidden" name="id" value="<?=$module['id']?>">
                                <button type="submit" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>