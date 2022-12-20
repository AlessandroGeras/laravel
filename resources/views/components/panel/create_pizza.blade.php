{{--Formulário de Criação de Pizza--}}

<div id="menu_create_pizza" class="hidden mt-20 w-full max-w-xs mx-auto">
    <form class="bg-gray-50 shadow-md rounded px-8 pt-4 pb-4 mb-4" method="POST" action="{{route('store_pizza')}}">
        @CSRF
        
        <div>
            <label class="block text-yellow-500 text-lg font-bold mb-4 text-center">
                Criar Pizza
            </label>

            <label class="mt-2 block text-gray-700 text-sm font-bold mb-2 text-center">
                Nome da Pizza
            </label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text">

            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                Descrição da Pizza
            </label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" type="text">

            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                URL da imagem da pizza
            </label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline" name="image_url" type="text">

            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                Categoria da Pizza
            </label>

            <select class="shadow border rounded w-full text-gray-700 mb-1 leading-tight focus:outline-none focus:shadow-outline text-center" name="category">
                <option value="salgada">Salgada</option>
                <option value="doce">Doce</option>
            </select>

            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                Preço
            </label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="price" type="number" step=".01" placeholder="Valor decimal - Ex:32,50">
            </div>
        
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-auto" type="submit">
                Criar Pizza
            </button>
        </div>
    </form>
</div>