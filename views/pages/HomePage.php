<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-6xl bg-white shadow-lg rounded-lg p-6">
        <!-- Header Section -->
        <div class="flex justify-between items-center border-b pb-4 mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Employee Management</h2>
            <a href="/create" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md shadow-md transition duration-300">
                + Add New Employee
            </a>
        </div>

        <!-- Table Section -->
        <div class="overflow-hidden rounded-lg shadow-md">
            <table class="w-full border border-gray-300 bg-white">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-sm tracking-wider">
                        <th class="px-6 py-3 text-left border">ID</th>
                        <th class="px-6 py-3 text-left border">First Name</th>
                        <th class="px-6 py-3 text-left border">Last Name</th>
                        <th class="px-6 py-3 text-left border">Display Name</th>
                        <th class="px-6 py-3 text-center border">Email</th>
                        <th class="px-6 py-3 text-center border">Password</th>
                        <th class="px-6 py-3 text-center border">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach ($employees as $employee) { ?>
                        <tr class="hover:bg-gray-100 transition duration-300">
                            <td class="px-6 py-4 text-gray-700 border"><?= $employee['employee_id'] ?></td>
                            <td class="px-6 py-4 font-medium text-gray-800 border"><?= htmlspecialchars($employee['first_name']) ?></td>
                            <td class="px-6 py-4 text-gray-600 border"><?= htmlspecialchars($employee['last_name']) ?></td>
                            <td class="px-6 py-4 text-gray-600 border"><?= htmlspecialchars($employee['display_name']) ?></td>
                            <td class="px-6 py-4 text-gray-600 border text-center"><?= htmlspecialchars($employee['email']) ?></td>
                            <td class="px-6 py-4 text-gray-600 border text-center"><?= htmlspecialchars($employee['password']) ?></td>
                            <td class="px-6 py-4 text-center border">
                                <div class="flex justify-center space-x-2">
                                    <a href="/edit/<?= $employee['employee_id'] ?>" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm shadow transition duration-300">
                                        Edit
                                    </a>
                                    <form action="./controllers/handlers/DeleteEmployee.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this employee?')">
                                    <input type="hidden" name="employee_id" value="<?= $employee['employee_id'] ?>">
                                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm shadow transition duration-300">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>