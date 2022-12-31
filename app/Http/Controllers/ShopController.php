<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class ShopController extends Controller
{
    public function add_item($id)
    {
        $pizza = Pizza::findOrFail($id)->name; 
        dd($pizza);
    }
}
