<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\webController;
Use App\Http\Controllers\loginAdmin;

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