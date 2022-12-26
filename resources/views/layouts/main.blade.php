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
      
    </div>
  </navbar>  

  <main>
   
  </main>

</body>

</html>