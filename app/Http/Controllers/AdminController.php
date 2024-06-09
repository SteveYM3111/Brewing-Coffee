<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;

class AdminController extends Controller
{
    public function mainAdmin()
    {
        return view('layout/mainAdmin', [
            "title" => "admin"
        ]);
    }

    public function AdminKonfirmasi()
    {
        return view('admin/AdminKonfirmasi', [
            "title" => "Konfirmasi"
        ]);
    }

    public function Barang()
    {
        return view('admin/Barang', [
            "title" => "Barang"
        ]);
    }

    public function DataCustomer()
    {
        return view('admin/DataCustomer', [
            "title" => "Data Customer"
        ]);
    }

    public function DataBarang()
    {
        return view('admin/DataBarang', [
            "title" => "Daftar Barang"
        ]);
    }

    public function DaftarAdmin()
    {
        return view('admin/DaftarAdmin', [
            "title" => "Data Admin"
        ]);
    }
    public function Review()
    {
        return view('admin/Review',[
            "title" => "Review"
]);
}

  public function Profile()
    {
        return view('admin/Profile',[
            "title" => "Profile"
]);
}

public function Dashboard()
    {
        return view('admin/Dashboard',[
            "title" => "Dashboard"
]);

}
public function Dashboard2()
    {
        return view('admin/Dashboard2',[
            "title" => "Dashboard2"
]);
}
}