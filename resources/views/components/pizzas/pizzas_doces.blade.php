{{--Grid de pizzas doces - Está como slot nas pizzas salgadas--}}

@php
$login_route=route('login');
@endphp

<div class="mt-10">

    {{--Pizzas Doces--}}
    <div class="text-2xl text-yellow-500 underline">Pizzas Doces</div>
    <div class="mt-6 grid grid-cols-4 gap-x-4 gap-y-8">

        @isset($pizzas)
        @foreach ($pizzas as $pizza)
        @if($pizza->category=="doce")

        <div><img class="z-10 relative rounded-full border-4 border-yellow-500" src="{{$pizza->image_url}}">
            <div class="mt-[-15px] relative h-60 w-[240px] bg-rose-100 rounded">
                <div class="text-lg font-medium relative top-5 left-5">{{$pizza->name}}</div>
                <div class="text-sm relative top-10 left-5 pr-10">{{$pizza->description}}</div>
                <br>

                @guest
                <div class="text-sm absolute bottom-4 left-1/4 bg-green-700 hover:bg-green-500 text-white w-1/2 text-center pr-2 rounded cursor-pointer" id="{{$pizza->name}}" onclick="window.location.href='{{$login_route}}'">
                    <div> <i class="fa-solid fa-cart-shopping p-2"></i>
                        @php
                        echo number_format((float)$pizza->price, 2, ',', '');
                        @endphp</div>
                </div>
                @endguest

                @auth
                <form class="form_add_item" method="POST" action="{{route('add_item',[$pizza->id])}}">
                    @CSRF
                    <input type="hidden" name="name" value="{{$pizza->name}}">
                    <input type="hidden" name="price" value="{{$pizza->price}}">

                    <button class="text-sm absolute bottom-4 left-1/4 bg-green-700 hover:bg-green-500 text-white w-1/2 text-center pr-2 rounded cursor-pointer" type="submit">
                        <div> <i class="fa-solid fa-cart-shopping p-2"></i>
                            @php
                            echo number_format((float)$pizza->price, 2, ',', '');
                            @endphp</div>
                    </button>
                </form>
                @endauth

            </div>
        </div>

        @endif
        @endforeach
        @endisset

    </div>
</div>
</div>