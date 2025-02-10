
<?php
// print_r ($result);
// echo ($result['first_name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-xl p-8">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">Edit Profile</h2>
            
            <form class="space-y-8" method="POST" action='/Updata/employee'>
                <!-- ID Field (non-editable) -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">ID</label>
                    <input type="text" 
                           value="<?= $uriPart[1] ?>" 
                           readonly.
                           name='employee_id'
                           id="employee_id"
                           class="mt-1 block w-full rounded-lg bg-gray-200 text-gray-500 border-gray-300 shadow-sm focus:ring-0 cursor-not-allowed py-2 px-4">
                </div>

                <!-- First Name & Last Name Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            First Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               required
                               id="first_name"
                               name="first_name"
                               value="<?=  ($result['first_name'])?>"
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 py-2 px-4">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Last Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                        id="last_name"
                        name="last_name"
                        value="<?=  ($result['last_name'])?>"

                               required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 py-2 px-4">
                    </div>
                </div>

                <!-- Display Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Display Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                    id="display_name"
                    name="display_name"
                    value="<?=  ($result['display_name'])?>"
                           required
                           class="mt-1 block w-full rounded-lg border-gray-300 shadow-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 py-2 px-4">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" 
                           required
                           value="<?=  ($result['email'])?>"

                           id="email"
                           name="email"
                           class="mt-1 block w-full rounded-lg border-gray-300 shadow-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 py-2 px-4">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Password <span class="text-red-500">*</span>
                    </label>
                    <input type="password" 
                           required
                           name="password"
                           value="<?=  ($result['password'])?>"
                           id="password"
                           class="mt-1 block w-full rounded-lg border-gray-300 shadow-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 py-2 px-4">
                </div>

                <!-- Phone Number -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Phone Number
                    </label>
                    <input type="tel" 
                    name="phone_number"
                    value="<?=  ($result['phone_number'])?>"

                    id="phone_number"
                           class="mt-1 block w-full rounded-lg border-gray-300 shadow-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 py-2 px-4">
                </div>

                <!-- Buttons -->
                <div class="pt-8 border-t border-gray-200 flex justify-end gap-6">
                    <button type="button"  
                            class="px-6 py-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg shadow-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-6 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
