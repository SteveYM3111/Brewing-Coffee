<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\webController;
Use App\Http\Controllers\loginAdmin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\loginUser;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\payment;
use App\Http\Controllers\Profile;

// Route::get('/', function (){
//     return view ('welcome');
// });



Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id){
    return 'User dengan ID ' . $id;
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});
/*Route::get('/listbarang/{id}/{nama}', function($id, $nama){
   return view('list_barang', compact('id','nama'));
});*/

Route::get('/home',[webController::class, 'home']);
Route::get('/product',[webController::class, 'product']);
Route::get('/login', [webController::class, 'login']);
Route::get('/lokasi', [webController::class, 'lokasi']);
Route::get('/loginAdmin', [loginAdmin::class, 'loginAdmin']);
Route::get('/home',[webController::class, 'home']);
Route::get('/about',[webController::class, 'about']);
Route::get('/register',[webController::class, 'register']);
Route::get('/payment',[webController::class, 'payment']);


Route::get('layout/admin',[AdminController::class, 'mainAdmin']);
Route::get('admin/DaftarAdmin', [AdminController::class, 'DaftarAdmin']);
Route::get('admin/Profile',[AdminController::class, 'Profile']);
Route::get('admin/Dashboard',[AdminController::class, 'Dashboard']);
Route::get('admin/DataCustomer',[AdminController::class, 'DataCustomer']);


Route::get('admin/Barang', [OrderController::class, 'order'])->name('order.index');
Route::post('/order', [OrderController::class, 'create'])->name('order.create');