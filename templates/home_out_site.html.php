<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-red-500 p-6 flex item-center justify-center min-h-screen">
    <div class="w-full bg-pink p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            <i class="fas fa-book"></i> Coursework not too hard
        </h2>
        <h4 class="text-lg text-gray-600 mb-6">
            This website is created to help you answer every question you have in mind. Don't be worried!
        </h4>
        <img class="mx-auto rounded-lg shadow-md mb-6" height="300px" src="1.2.jpg" alt="Help Image" />

        <div class="container">
            <h1 class="text-xl font-bold text-gray-800 mb-4">Login</h1>
            <form action="login_query.php" method="post">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
                    <input type="text" class="form-control w-full p-2 border border-gray-300 rounded" id="username" name="username" required>
                </div>
                <div class="mb-4">
                    <label for="pass" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" class="form-control w-full p-2 border border-gray-300 rounded" id="pass" name="pass" required>
                </div>
                <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" name="login">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            </form>
            <br>
            <br>

            <h1 class="text-xl font-bold text-gray-800 mb-4 mt-6">Register</h1>
            <form action="add_user.php" method="post">
                <div class="mb-4">
                    <label for="name_user" class="block text-gray-700 font-bold mb-2">Type user's name here:</label>
                    <textarea name="name_user" rows="2" cols="30" class="w-full p-2 border border-gray-300 rounded" placeholder="Name"></textarea>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Type user's email here:</label>
                    <textarea name="email" rows="2" cols="30" class="w-full p-2 border border-gray-300 rounded" placeholder="Email"></textarea>
                </div>
                <div class="mb-4">
                    <label for="adress" class="block text-gray-700 font-bold mb-2">Type user's address here:</label>
                    <textarea name="adress" rows="2" cols="30" class="w-full p-2 border border-gray-300 rounded" placeholder="Address"></textarea>
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-bold mb-2">Type username here:</label>
                    <textarea name="username" rows="2" cols="30" class="w-full p-2 border border-gray-300 rounded" placeholder="Username"></textarea>
                </div>
                <div class="mb-4">
                    <label for="pass" class="block text-gray-700 font-bold mb-2">Type password here:</label>
                    <textarea name="pass" rows="2" cols="30" class="w-full p-2 border border-gray-300 rounded" placeholder="Password"></textarea>
                </div>
                <button type="submit" class="btn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" name="submit">
                    <i class="fas fa-user-plus"></i> Register
                </button>
            </form>

            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger mt-3 text-red-600">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>