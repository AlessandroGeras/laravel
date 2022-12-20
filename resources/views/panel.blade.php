{{--Painel Administrativo--}}

@extends("layouts.main")

@section("title","Painel")

@section("corpo")

<main>
    <x-panel.panel />

    <x-panel.create_pizza />

    <x-panel.edit_pizza :pizzas="$pizzas"/>

    <x-panel.destroy_pizza :pizzas="$pizzas"/>
</main>

@endsection