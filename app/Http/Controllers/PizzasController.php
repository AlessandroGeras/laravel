<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PizzasController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());
        $pizzas = Pizza::all()->sortBy("id");

        return response()->view('index', ["user" => $user, "pizzas" => $pizzas])->setStatusCode(200);
    }

    public function store_pizza(Request $request)
    {

        request()->validate(
            [
                'name' => ['required', 'unique:pizzas'],
                'description' => 'required',
                'image_url' => 'required',
                'price' => 'required'
            ],
            [
                'name.required' => "O nome deve ser informado!",
                'name.unique' => "Esta pizza já está cadastrada!",
                'description.required' => "A descrição deve ser informada!",
                'image_url.required' => "A URL da imagem deve ser informada!",
                'price.required' => "O valor deve ser informado!"                
            ]
        );

        $pizza = new Pizza;
        $pizza->name = $request->name;
        $pizza->description = $request->description;
        $pizza->image_url = $request->image_url;
        $pizza->category = $request->category;
        $pizza->price = $request->price;
        $pizza->save();

        $pizza_name = strtoupper($request->name);

        return redirect()->back(302)->with("pizza_event", "Pizza ".$pizza_name." criada com sucesso!");
    }

    public function update_pizza(Request $request)
    {
        Pizza::findOrFail($request->id)->update($request->all());

        $pizza_name = strtoupper($request->name);

        return redirect()->back(302)->with("pizza_event", "Pizza ".$pizza_name." editada com sucesso!");
    }

    public function destroy_pizza($id)
    {
        $pizza_name = Pizza::findOrFail($id)->name;        
        $pizza_name_uppercase = strtoupper($pizza_name);

        Pizza::findOrFail($id)->delete();
        
        return redirect()->back(302)->with("pizza_event", "Pizza ".$pizza_name_uppercase." excluída com sucesso!");
    }
}
