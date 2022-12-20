{{--Navbar Menu no Layout Principal--}}

<div class="float-right mt-[-0.5px] mr-60 flex items-center h-14">

    @guest
    <ul class="font-bold lg:flex">
        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200 hover:bg-white cursor-pointer" href="{{route('login')}}">
        <i class="fa-solid fa-pizza-slice"></i> &nbsp; Fazer login</a></li>

        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200  hover:bg-white cursor-pointer" href="{{route('create_user')}}">
        <i class="fa-solid fa-user-plus"></i> &nbsp; Criar conta</a></li>
    </ul>
    @endguest

    @auth
    <ul class="mt-[11.5px] font-bold lg:flex">
        <li><a class="p-[16px] text-3xl font-dancing  font-medium text-yellow-500 cursor-default" href="{{route('create_user')}}">
        Olá, {{$user->name}}</a></li>

        {{--Alternar botões para a página principal e o painel administrativo para o Admin--}}
        @if($user->permission->role=="admin")
        @if(Route::currentRouteName()=="index")
        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200  hover:bg-white cursor-pointer" href="{{route('panel')}}">
        <i class="fa-solid fa-screwdriver-wrench"></i> &nbsp; Painel Administrativo</a></li>
        
        @else
        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200 hover:bg-white cursor-pointer" href="{{route('index')}}">
        <i class="fa-solid fa-house"></i> &nbsp; Página Principal</a></li>
        @endif
        @endif

        <li><a class="p-[16px] border-l-[1px] border-r-[1px] border-solid border-gray-400 font-open font-medium text-base bg-gray-200  hover:bg-white cursor-pointer" href="{{route('logoff')}}">
                <i class="fa-solid fa-door-open"></i> &nbsp; Logoff</a></li>
        @endauth
    </ul>
</div>

</html>