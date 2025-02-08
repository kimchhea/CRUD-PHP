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
        
        <form id="registrationForm" class="space-y-4" action='/store/employees' method='POST'>
            <!-- First Name -->
            <div>
                <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="firstname" name="first_name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-500 text-sm mt-1 hidden" id="firstnameError"></p>
            </div>

            <!-- Last Name -->
            <div>
                <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="lastname" name="last_name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-500 text-sm mt-1 hidden" id="lastnameError"></p>
            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Display Name</label>
                <input type="text" id="username" name="display_name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-500 text-sm mt-1 hidden" id="usernameError"></p>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-500 text-sm mt-1 hidden" id="emailError"></p>
            </div>

            
            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-500 text-sm mt-1 hidden" id="passwordError"></p>
            </div>

            <!-- Phone Number -->
            <div>
                <label for="phonenumber" class="block text-sm font-medium text-gray-700">Phone number</label>
                <input type="number" id="phonenumber" name="phone_number" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <p class="text-red-500 text-sm mt-1 hidden" id="phoneError"></p>
            </div>
                
            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md shadow-md transition duration-300">Register</button>
        </form>
    </div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            let isValid = true;

            function validateField(id, errorId, message) {
                let input = document.getElementById(id);
                let error = document.getElementById(errorId);
                if (input.value.trim() === "") {
                    error.textContent = message;
                    error.classList.remove("hidden");
                    input.classList.add("border-red-500");
                    isValid = false;
                } else {
                    error.classList.add("hidden");
                    input.classList.remove("border-red-500");
                }
            }

            validateField("firstname", "firstnameError", "First name is required");
            validateField("lastname", "lastnameError", "Last name is required");
            validateField("username", "usernameError", "Display name is required");
            validateField("email", "emailError", "Email is required");
            validateField("phonenumber", "phoneError", "Phone number is required");
            validateField("password", "passwordError", "Password is required");
            
            if (isValid) {
                alert("Form submitted successfully!");
                document.getElementById("registrationForm").submit();
            }
        });
    </script>
</body>
</html>
