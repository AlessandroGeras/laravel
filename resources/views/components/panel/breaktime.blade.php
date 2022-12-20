{{--Formulário de Período de Recesso--}}

<div id="menu_breaktime" class="hidden mt-20 w-full max-w-xs mx-auto">
    <form class="bg-gray-50 shadow-md rounded px-8 pt-4 pb-4 mb-4" method="POST" action="{{route('store_pizza')}}">
        @CSRF
        
        <div>
            <label class="block text-yellow-500 text-lg font-bold mb-4 text-center">
                Definir Recesso<br>
                Funcionalidade Não Concluída
            </label>

            <label class="mt-2 block text-gray-700 text-sm font-bold mb-2 text-center">
                Selecione o dia em que o recesso iniciará
            </label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-center" name="breaktime_start" type="date">

            <label class="mt-4 block text-gray-700 text-sm font-bold mb-2 text-center">
                Selecione o dia em que o recesso terminará
            </label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-center" name="breaktime_end" type="date">            
        
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-auto" type="submit">
                Funcionalidade Não Concluída
            </button>
        </div>
    </form>
</div>