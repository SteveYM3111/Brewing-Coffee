<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order(){
        $order = Order::all();
        return view('admin/Barang', [
            'order' => $order
        ]);
    }

    public function create(Request $request){
     $format_file = $request->file('picture')->getClientOriginalName();
     $request->file('picture')->move(public_path('pictures'), $format_file);

    Order::create([
        'name' => $request->name,
        'qty' => $request->qty,
        'price' => $request->price,
        'description' => $request->description,
        'picture' => 'pictures/'.$format_file,
    ]);
    return redirect()->back();
}
}