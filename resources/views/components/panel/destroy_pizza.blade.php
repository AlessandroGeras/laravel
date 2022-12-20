{{--Formulário de exclusão de pizzas--}}

<div id="menu_destroy_pizza" class="hidden">

    @isset($pizzas)
    @foreach ($pizzas as $pizza)
    <div class="mt-20 w-full max-w-xs mx-auto">
        <form class="bg-gray-50 shadow-md rounded px-8 pt-4 pb-4 mb-4" method="POST" action="{{route('destroy_pizza', [$pizza->id])}}" onsubmit="let pizza_name = '{{$pizza->name}}';let pizza_name_uppercase = pizza_name.toUpperCase();return confirm('Você tem certeza que deseja EXCLUIR a pizza '+pizza_name_uppercase+'?');">
            @CSRF
            @method("DELETE")

            <div>
                <label class="block text-red-500 text-3xl font-bold mb-4 text-center">
                    EXCLUIR Pizza
                </label>

                <label class="mt-2 block text-gray-700 text-sm font-bold mb-2 text-center">
                    Nome da Pizza
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-center" name="name" type="text" value="{{$pizza->name}}">

                <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                    Descrição da Pizza
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-center" name="description" value="{{$pizza->description}}" type="text">

                <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                    URL da imagem da pizza
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline text-center" name="image_url" value="{{$pizza->image_url}}" type="text">

                <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                    Categoria da Pizza
                </label>

                <select class="shadow border rounded w-full text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline text-center" name="category">
                    <option value="salgada" <?php if ($pizza['category'] == 'salgada') {
                                                echo "selected";
                                            } ?>>Salgada</option>
                    <option value="doce" <?php if ($pizza['category'] == 'doce') {
                                                echo "selected";
                                            } ?>>Doce</option>
                </select>

                <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                    Preço
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline text-center" name="price" type="number" step=".01" value="{{$pizza->price}}">
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-auto text-center" type="submit">
                    Excluir Pizza
                </button>
            </div>
        </form>
    </div>

    @endforeach
    @endisset

</div>