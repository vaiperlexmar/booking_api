@extends("layout")

@section('content')
    <form action="{{ route("api.v1.login") }}" method="post" id="login_form">
        @csrf
        <div class="container p-4">
            <h1 class="text-5xl font-bold mb-4">Login</h1>
            <p class="mb-4">Please fill in this form to login.</p>
            <hr class="mb-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <hr class="mb-4">

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>

            <button type="submit"
                    class="bg-green-800 text-white py-4 px-5 my-2 mx-0 border-0 cursor-pointer w-full opacity-90 hover:opacity-100">
                Login
            </button>
        </div>

        <div class="container p-4 text-center bg-gray-100">
            <p>Haven't account yet? <a href="{{route('register')}}" class="underline text-green-800">Sign up</a>.</p>
        </div>
    </form>
@endsection
