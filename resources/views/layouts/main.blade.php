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

<body class="bg-gray-700')] dark:bg-blend-overlay" onscroll="getScrollPos()">

  <navbar>
    <div>
      <x-navbar.navbar_logo />
    </div>
  </navbar>  

  <main>
  </main>

</body>

</html>