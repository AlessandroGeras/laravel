{{--Layout Principal--}}

@php
date_default_timezone_set('America/Sao_Paulo');
@endphp

@if(session('msg'))
  <script>alert("{{session('msg')}}")</script>
@endif
  
<html>

<head>
  <title>@yield("title")</title>

  <x-layouts.head />
</head>

<body class="bg-gray-700 bg-[url('https://cdn.prefirodelivery.com/donvittopizza/assets/imagens/bg.png?v=2021')] dark:bg-blend-overlay" onscroll="getScrollPos()">

  <navbar>
    <div>
      <x-navbar.navbar_logo />

      <x-navbar.navbar_menu :user="$user"/>

      <x-navbar.darkmode />

      <x-navbar.pizza_slice />

      <x-navbar.navbar_status />
    </div>
  </navbar>  

  <main>
    @yield("corpo")
  </main>

</body>

</html>