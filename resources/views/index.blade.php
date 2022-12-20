{{--Página Principal--}}

@extends("layouts.main")

@section("title","Delivery")

@section("corpo")

<sidebar>
    <div id="sidebar" class="float-left h-10 ml-12 mt-[100px] font-bold text-white grid grid-rows-3 grid-flow-col gap-10">
        <div>Pizzas Salgadas</div>
        <div>Pizzas Doces</div>
        <div>Pizzas Premium</div>
    </div>
</sidebar>

<main>
    <x-pizzas.pizzas_salgadas :pizzas="$pizzas">
        <x-pizzas.pizzas_doces :pizzas="$pizzas" />
    </x-pizzas.pizzas_salgadas>
</main>

@endsection