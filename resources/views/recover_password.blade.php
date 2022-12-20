{{--Página para Redefinir Nova Senha--}}

@extends("layouts.main")

@section("title","Redefinir Nova Senha")

@section("corpo")

<main>
    <x-auth.recover_password_token :token="$token" />
</main>

@endsection