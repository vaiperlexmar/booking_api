@extends("layout")

@section('header')

    <form id="logout_form" action="{{route("api.v1.logout")}}" method="post">
        @csrf
        <button type="submit"
                class="bg-green-800 text-white py-2 px-5 my-2 mx-0 border-0 cursor-pointer opacity-90 hover:opacity-100 font-bold">
            Logout
        </button>
    </form>
@endsection

@section('content')
    @auth()
        <h1 class="text-5xl font-bold mb-4">Блин, ну ты крутой чувак авторизированный - {{Auth::user()->name}}</h1>
    @endauth
    @guest()
        <h1 class="text-5xl font-bold mb-4">Перец, ты давай там поживее авторизуйся или зарегайся что-ли</h1>
        <a href="/register">вот тут</a>
    @endguest

@endsection
