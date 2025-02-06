<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen p-6">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">User Registration</h2>

        <form action='/store/employees' method="post" class="space-y-4">
            <!-- First Name -->
            <div>
                <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="firstname" name="first_name" 
                    class="mt-1 block w-full px-4 py-2 border <?= isset($errors['first_name']) ? 'border-red-500' : 'border-gray-300' ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    value="<?= isset($formData['first_name']) ? htmlspecialchars($formData['first_name']) : ''; ?>">
                <?php if(isset($errors['first_name'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['first_name'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Last Name -->
            <div>
                <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="lastname" name="last_name" 
                    class="mt-1 block w-full px-4 py-2 border <?= isset($errors['last_name']) ? 'border-red-500' : 'border-gray-300' ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    value="<?= isset($formData['last_name']) ? htmlspecialchars($formData['last_name']) : ''; ?>">
                <?php if(isset($errors['last_name'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['last_name'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Display Name</label>
                <input type="text" id="username" name="display_name" 
                    class="mt-1 block w-full px-4 py-2 border <?= isset($errors['display_name']) ? 'border-red-500' : 'border-gray-300' ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    value="<?= isset($formData['display_name']) ? htmlspecialchars($formData['display_name']) : ''; ?>">
                <?php if(isset($errors['display_name'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['display_name'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" 
                    class="mt-1 block w-full px-4 py-2 border <?= isset($errors['email']) ? 'border-red-500' : 'border-gray-300' ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    value="<?= isset($formData['email']) ? htmlspecialchars($formData['email']) : ''; ?>">
                <?php if(isset($errors['email'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" 
                    class="mt-1 block w-full px-4 py-2 border <?= isset($errors['password']) ? 'border-red-500' : 'border-gray-300' ?> rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <?php if(isset($errors['password'])): ?>
                    <p class="text-red-500 text-sm mt-1"><?= $errors['password'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md shadow-md transition duration-300">
                Register
            </button>
        </form>
    </div>
</body>

</html>
