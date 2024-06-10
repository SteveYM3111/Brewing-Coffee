<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-green-600 w-full max-w md:h-52 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-80 rounded-lg shadow-2xl"></div>

    <div class="w-full max-w-md mx-auto p-6 bg-white rounded-lg shadow-md relative z-10">
        <form>
            <h2 class="text-2xl font-bold text-center mb-8">Register</h2>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input id="name" type="text" placeholder="Your Full Name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input id="email" type="email" placeholder="Your Email Address"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="Number" class="block text-gray-700 text-sm font-bold mb-2">Number</label>
                <input id="Number" type="text" placeholder="Your Phone Number"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input id="password" type="password" placeholder="Your Password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <a href="/loginAdmin"><button type="button"
                    class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Register
                </button></a>
        <!-- foreach (@user) -->
            </div>
            <p class="text-center text-gray-500 text-xs mt-4">
                Already have an account? <a href="/loginAdmin" class="text-teal-500 hover:text-teal-700">Sign In</a>
            </p>
        </form>
    </div>

</body>
</html>
