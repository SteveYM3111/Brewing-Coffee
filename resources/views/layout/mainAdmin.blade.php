<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="fixed top-0 left-0 h-full w-64 bg-gray-800 text-white flex flex-col">
        <div class="flex items-center justify-center h-16">
            <img src="/image/Logo.png" class="w-20 h-20" alt="Logo">
        </div>
        <div class="font-bold text-green-600 text-center mb-2">VOIDCOFFEE</div>
        <ul class="menu p-4 w-full">
            <li class="mb-2"><a href="/admin/Dashboard" class="flex items-center"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></li>
            <li class="mb-2"><a href="/admin/DaftarAdmin" class="flex items-center"><i class="fas fa-user-shield mr-2"></i>Data Admin</a></li>
            <li class="mb-2"><a href="/admin/DataCustomer" class="flex items-center"><i class="fas fa-users mr-2"></i>Data Customer</a></li>
            <li class="mb-2"><a href="/admin/Barang" class="flex items-center"><i class="fa-solid fa-boxes-stacked mr-2"></i>Data Barang</a></li>
            <li class="mb-2"><a href="/admin/komen" class="flex items-center"><i class="fa-solid fa-boxes-stacked mr-2"></i>Komentar</a></li>
        </ul>
    </div>

    <div class="ml-64 flex-1">
        <div class="fixed top-0 right-0 left-64 bg-green-600 flex items-center justify-between h-16 px-4 z-10">
            <div class="text-lg font-semibold">Navbar</div>
            <div class="flex items-center">
                <div class="dropdown dropdown-end mx-10">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Admin avatar" src="/image/gojoadmin.png" />
                        </div>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="Profile">Profile</a></li>
                        <li><a href="Profile">Settings</a></li>
                        <li><a href="Profile">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pt-16 px-4">
            @yield('content')
        </div>
    </div>
</body>

</html>
