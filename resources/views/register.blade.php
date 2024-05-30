<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Reg</title>
</head>
<body>
    <section class="bg-gray-100 min-h-screen flex items-center justify-center">
        <!--register-->
        <div class="bg-gray-50 flex rounded-2xl shadow-lg max-w-3xl">
            <!--form-->
            <div class="w-1/2 p-5">
                <h2 class="font-bold text-2xl">Register</h2>
                <p class="text-sm mt-4">Jika kamu seorang member, lebih mudah untuk login</p>
                <form action="" class="flex flex-col">
                    <input type="text" name="email" placeholder="Email" class="block w-3/4 p-2 border border-gray-300 rounded mt-4 mx-auto">
                    <div class="relative w-3/4 mx-auto mt-4">
                        <input id="password" type="password" name="password" placeholder="Password" class="block w-full p-2 border border-gray-300 rounded pr-10">
                        <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-400 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 2C5.5 2 1.74 5.11 0 10c1.74 4.89 5.5 8 10 8s8.26-3.11 10-8c-1.74-4.89-5.5-8-10-8zM10 16c-3.9 0-7.24-2.87-8.71-6 1.47-3.13 4.81-6 8.71-6s7.24 2.87 8.71 6c-1.47 3.13-4.81 6-8.71 6zm0-10a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </div>
                    <button type="submit" class="w-3/4 mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300 ease-in-out mx-auto">Register</button>
                    <div class="flex items-center justify-center mt-4">
                        <div class="border-t border-gray-300 w-1/4"></div>
                        <span class="mx-2 text-gray-500">OR</span>
                        <div class="border-t border-gray-300 w-1/4"></div>
                    </div>
                    <button class="flex items-center justify-center w-3/4 mt-4 bg-white text-gray-700 py-2 px-4 rounded border border-gray-300 hover:bg-gray-100 transition duration-300 ease-in-out mx-auto">
                        <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.5 12.275c0-.81-.073-1.6-.204-2.365H12v4.475h6.53c-.28 1.38-1.1 2.55-2.306 3.33v2.775h3.734c2.18-2.005 3.442-4.95 3.442-8.215z" fill="#4285F4"/>
                            <path d="M12 24c3.15 0 5.79-1.045 7.72-2.83l-3.734-2.775c-1.04.7-2.36 1.12-3.986 1.12-3.06 0-5.65-2.06-6.57-4.83H1.618v3.03C3.54 21.545 7.51 24 12 24z" fill="#34A853"/>
                            <path d="M5.43 14.685c-.24-.7-.38-1.43-.38-2.185s.14-1.485.38-2.185v-3.03H1.617C.59 9.095 0 10.5 0 12c0 1.5.59 2.905 1.617 4.315L5.43 14.685z" fill="#FBBC05"/>
                            <path d="M12 4.775c1.63 0 3.095.56 4.25 1.65l3.19-3.19C17.79 1.045 15.15 0 12 0 7.51 0 3.54 2.455 1.618 5.97l3.813 2.83c.92-2.77 3.51-4.825 6.57-4.825z" fill="#EA4335"/>
                        </svg>
                        Login dengan Google
                    </button>
                </form>
            </div>

            <!--image-->
            <div class="sm:block hidden w-1/2 p-5 h-96">
                <img class="rounded-lg h-full w-full object-cover" src="image/hehehe.jpg" alt="">
            </div>
        </div>
    </section>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Toggle the eye slash icon
            this.classList.toggle('text-gray-600');
        });
    </script>
</body>
</html>