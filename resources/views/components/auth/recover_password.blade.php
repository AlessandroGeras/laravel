{{--Formulário de Recuperação de Senha--}}

<div class="mt-20 w-full max-w-xs mx-auto">
  <form class="bg-gray-50 shadow-md rounded px-8 pt-4 pb-4 mb-4" method="POST" action="{{route('send_mail')}}">
    @CSRF

    <label class="block text-yellow-500 text-lg font-bold mb-4 text-center">
      Recuperar Senha
    </label>

    @if($errors->any())
    <div class="bg-red-500">
      <div class="text-white text-sm font-bold mb-4 text-center">
        @foreach ($errors->all() as $error)
        {{ $error }}<br />
        @endforeach
      </div>
    </div>
    @endif

    @if(session('auth'))
    <div class="text-white bg-red-500 text-sm font-bold mb-4 text-center">
      {!!session('auth')!!}
    </div>
    @endif

    <label class="block text-gray-700 text-sm font-bold mb-2">
      Email
    </label>

    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" type="text">

    <div class="mt-8 flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mx-auto" type="submit">
        Recuperar Senha
      </button>

      <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded focus:outline-none focus:shadow-outline mx-auto" href="{{route('login')}}">
        Cancelar
      </a>
    </div>
  </form>
</div>