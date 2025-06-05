@extends("layout")

@section('content')
    <form action="{{ route("api.v1.reset_password") }}" method="post" id="login_form">
        @csrf
        <div class="container p-4">
            <h1 class="text-5xl font-bold mb-4">Set new password</h1>
            <p class="mb-4">Please fill in this form to set new password for your account</p>
            <hr class="mb-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                <hr class="mb-4">
            @endif

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="password_confirmation" id="psw-repeat" required>

            <input type="hidden" name="token" value="{{ $token }}">
            <hr>

            <button type="submit"
                    class="bg-green-800 text-white py-4 px-5 my-2 mx-0 border-0 cursor-pointer w-full opacity-90 hover:opacity-100">
                Reset password
            </button>
        </div>
    </form>
@endsection
