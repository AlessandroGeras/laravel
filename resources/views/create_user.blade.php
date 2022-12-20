{{--Página para Cadastro de Usuários--}}

@extends("layouts.main")

@section("title","Criar Usuário")

@section("corpo")

<main>
   <x-auth.create_user />
</main>

@endsection