{{--Página Principal--}}

@extends("layouts.main")

@section("title","Delivery")

@section("corpo")

<sidebar>
   <x-index.sidebar>
      <x-shop.shop/>
   </x-index.sidebar>
</sidebar>

<main>
   <x-pizzas.pizzas_salgadas :pizzas="$pizzas">
      <x-pizzas.pizzas_doces :pizzas="$pizzas" />
   </x-pizzas.pizzas_salgadas>
</main>

@endsection