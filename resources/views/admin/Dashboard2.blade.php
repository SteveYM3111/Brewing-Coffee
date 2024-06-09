@extends('layout.mainAdmin')
@section('content')
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

      <!-- Cards -->
        <div class="grid grid-cols-6 gap-6 mb-6 mt-10">
            <div class="bg-blue-600 text-white p-4 h-16 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Total Sale</h3>
            </div>
            <div class="bg-orange-600 text-white p-4 h-16 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Daily Sale</h3>
            </div>
            <div class="bg-green-600 text-white p-4 h-16 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Total Sale</h3>
            </div>
            <div class="bg-green-800 text-white p-4 h-16 rounded-lg shadow">
                <h3 class="text-xl font-semibold">Expenses</h3>
            </div>
            <div class="col-span-2 flex justify-end items-end w-full">
            <div class="bg-orange-500 text-white p-4 rounded-lg w-full shadow">
                    <h3 class="text-2xl font-bold">$ 9.470</h3>
                        <p class="text-sm">Active Balance</p>
                            <div class="mt-4">
                                <div class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">
                                        <span class="material-icons text-green-500">arrow_upward</span>
                                        <span class="ml-2">Incomes</span>
                                    </div>
                                </div>
                                <span>$1699.0</span>
                                
                                <div class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">
                                        <span class="material-icons text-red-500">arrow_downward</span>
                                        <span class="ml-2">Expenses</span>
                                    </div>
                                </div>
                                <span>-$799.0</span>
                                </div>
                                <div class="flex justify-between items-center mb-4">
                                    <div class="flex items-center">
                                        <span class="material-icons text-red-500">arrow_downward</span>
                                        <span class="ml-2">Taxes</span>
                                    </div>
                                </div>
                                <span>-$199.0</span>
                                <button class="w-full bg-white text-orange-500 py-2 rounded-lg">Add Virtual Card</button>
                            </div>
                    
            </div>    
            </div>    
        </div>
        </div>

      <!-- Chart and Upcoming Payments -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Chart -->
        <div class="bg-white p-6 rounded-lg shadow col-span-2">
          <h2 class="text-xl font-semibold mb-4">Primary Sales</h2>
          <div class="w-full h-64 bg-gray-200 rounded-lg"></div> <!-- Placeholder for the chart -->
        </div>
        <!-- Upcoming Payments -->
        <div class="bg-white p-6 rounded-lg shadow">
          <h2 class="text-xl font-semibold mb-4">Upcoming Payments</h2>
          <ul>
            <li class="flex justify-between py-2">
              <span>Easy Pay Way</span>
              <span class="text-red-600">$82258.23</span>
            </li>
            <li class="flex justify-between py-2">
              <span>Payoneer</span>
              <span class="text-red-600">$61486.69</span>
            </li>
            <li class="flex justify-between py-2">
              <span>FastSpring</span>
              <span class="text-red-600">$4210.38</span>
            </li>
          </ul>
          <div class="mt-4">
            <button class="w-full bg-orange-500 text-white py-2 rounded-lg">Add Virtual Card</button>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>

</html>
@endsection