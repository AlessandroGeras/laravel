<head>
    <script src="/assets/js/scroll.js"></script>
</head>

<div id="sidebar" class="float-left h-10 ml-12 mt-[100px] font-bold text-white grid grid-rows-4 grid-flow-col gap-10">
    <div>Pizzas Salgadas</div>
    <div>Pizzas Doces</div>
    <div>Pizzas Premium</div>

    @auth
    {{--Shop--}}
    {{$slot}}
    @endauth
</div>