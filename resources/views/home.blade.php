@extends("layout")

@section('content')
    @auth()
        <h1 class="text-5xl font-bold mb-4">Блин, ну ты крутой чувак авторизированный - {{Auth::user()->name}}</h1>
    @endauth
    @guest()
        <h1 class="text-5xl font-bold mb-4">Перец, ты давай там поживее авторизуйся или зарегайся что-ли</h1>
        <a href="/register">вот тут</a>
    @endguest

@endsection
