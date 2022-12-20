{{--Painel Administrativo--}}

<div class="mt-14 flex justify-center gap-20">
    <button class="bg-gray-200 hover:bg-gray-200 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="create_pizza" onclick="create_pizza(this.id)">
        Criar Pizza
    </button>

    <button class="bg-gray-200 hover:bg-gray-200 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="edit_pizza" onclick="edit_pizza(this.id)">
        Editar Pizza
    </button>

    <button class="bg-gray-200 hover:bg-gray-200 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="destroy_pizza" onclick="destroy_pizza(this.id)">
        Excluir Pizza
    </button>
</div>

@if($errors->any())
<div class="mt-10 bg-red-500 mb-[-40px]">
    <div class="text-white text-sm font-bold text-center">
        @foreach ($errors->all() as $error)
        {{ $error }}<br />
        @endforeach
    </div>
</div>
@endif

@if(session('pizza_event'))
<div class="mt-10 text-white bg-red-500 text-sm font-bold mb-[-40px] text-center">
    {{session('pizza_event')}}
</div>
@endif