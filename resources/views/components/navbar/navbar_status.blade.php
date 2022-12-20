{{--Informações gerais do cliente na Navbar--}}

{{--Verificação sobre status da loja - ABERTO/FECHADO--}}
@php
$hour=date('H');
$day=date('l');
$shop_status="FECHADO";

if($hour>=18){
    if($day!="monday"){
        $shop_status="ABERTO";
    }
}
@endphp

<div class="mt-5 flex justify-evenly text-white">
<div class="underline-offset-8 underline decoration-yellow-500">Taxa de entrega a partir de R$5,00</div>

@if($shop_status=="ABERTO")
<ul role="list" class="font-bold marker:text-green-500 list-disc pl-5 space-y-3 text-green-500 underline-offset-8 underline decoration-yellow-500">
  <li>{{$shop_status}}</li>
</ul>

@else
<ul role="list" class="font-bold marker:text-red-500 list-disc pl-5 space-y-3 text-red-500 underline-offset-8 underline decoration-yellow-500">
  <li>{{$shop_status}}</li>
</ul>
@endif

<div class="underline-offset-8 underline decoration-yellow-500">Aberto de terça a domingo das 18:00 até 00:00</div>
</div>