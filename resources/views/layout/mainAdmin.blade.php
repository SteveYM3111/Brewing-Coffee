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

<!-- Header -->

<body>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="flex flex-col w-64 bg-base-300 border-r text-netral">
            <div class="flex items-center justify-center h-16">
                <span class="text-lg font-semibold"><img src="/image/Logo.png" class="w-20 h-20" alt=""></span>
            </div>
            <div class="font-bold divider mb-2 text-green-600 ">VOIDCOFFEE</div>

            <!-- Tambahkan item-item sidebar di sini -->
            <ul class="menu w-full rounded-box">
                <li><a><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></li>
                <li><a href="/admin/DaftarAdmin"><i class="fas fa-user-shield mr-2"></i>Data Admin</a></li>
                <li><a href="/admin/DataCustomer"><i class="fas fa-users mr-2"></i>Data Customer</a></li>
                <li><a href="/admin/Barang"><i class="fa-solid fa-boxes-stacked mr-2"></i>Data Barang</a></li>
            </ul>

            <div>
    </div>
        </div>
        <!-- Navbar -->
        <div class="flex-1 bg-base-co">
            <div class="navbar bg-green-600">
                <div class="flex-1">
                    <!-- Tambahkan konten navbar di sini -->
                </div>
                <div class="flex-none">
                    <div class="dropdown dropdown-end">
                        <!-- Isi dropdown navbar di sini -->
                    </div>
                    <div class="dropdown dropdown-end mx-10">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component" src="/image/gojoadmin.png" />
                            </div>
                        </div>
                        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a>Profile</a></li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>


</body>

</html>