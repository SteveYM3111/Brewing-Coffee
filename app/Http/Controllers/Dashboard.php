<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function Dashboard()
    {
        return view('admin/Dashboard');
    }
}
