@extends('layout.mainAdmin')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-2xl rounded-lg p-8 w-full max-w-md ml-[275px] mt-[25px]">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <img class="w-24 h-24 rounded-full border-4 border-gray-300 shadow-lg" src="{{ asset('image/robin.png') }}"  alt="User profile picture">
                <div class="ml-4">
                    <h2 class="text-2xl font-semibold text-gray-800">Void</h2>
                    <p class="text-gray-600">void@gmail.com</p>
                </div>
            </div>
            <button class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition transform hover:-translate-y-1 hover:scale-105">
                <i class="fas fa-edit mr-0.3"></i>Edit
            </button>
        </div>

        <div class="space-y-4">
            <div>
                <label class="block text-gray-700 font-medium">Username</label>
                <div class="relative">
                    <input type="text" value="voidwalker" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 pl-10">
                    <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Nomor Telepon</label>
                <div class="relative">
                    <input type="text" value="+62123456789" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 pl-10">
                    <i class="fas fa-phone absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-gradient-to-r from-green-400 to-blue-500 text-white rounded-lg p-4 shadow-lg flex items-center">
                <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                    <i class="fas fa-coins text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-lg font-semibold">Total Poin</h4>
                    <p class="text-2xl">1200</p>
                </div>
            </div>
            <div class="bg-gradient-to-r from-purple-400 to-pink-500 text-white rounded-lg p-4 shadow-lg flex items-center">
                <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-4">
                    <i class="fas fa-ticket-alt text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-lg font-semibold">Voucher</h4>
                    <p class="text-2xl">2 available</p>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-center">
            <button class="bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-lg shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition transform hover:-translate-y-1 hover:scale-105">
                <i class="fas fa-sign-out-alt mr-0.3"></i>Close
            </button>
        </div>
    </div>

</body>
</html>

@endsection
