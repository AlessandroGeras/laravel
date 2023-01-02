<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function add_item(Request $request)
    {
        if (Session::has('items')) {
            Session::push('items', ["name" => $request->name,
            "price" => $request->price]);
        }
        else{
            $item = collect([[
                "name" => $request->name,
                "price" => $request->price,
            ]]);
            Session::put('items', $item);
        }

        $teste= session('items');
        echo "<script>console.log($teste);</script>";
    }
}
