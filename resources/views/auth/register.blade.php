<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body>
<form action="api/v1/auth/register" method="post">
    @csrf
    <div class="container p-4">
        <h1 class="text-5xl font-bold mb-4">Register</h1>
        <p class="mb-4">Please fill in this form to create an account.</p>
        <hr class="mb-4">

        <label for="name"><b>Type your username</b></label>
        <input type="text" placeholder="Enter Username" name="name" id="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password_confirmation" id="psw-repeat" required>
        <hr>

        <p>By creating an account you agree to our <a class="underline text-green-800" href="#">Terms & Privacy</a>.</p>
        <button type="submit"
                class="bg-green-800 text-white py-4 px-5 my-2 mx-0 border-0 cursor-pointer w-full opacity-90 hover:opacity-100">Register
        </button>
    </div>

    <div class="container p-4 text-center bg-gray-100">
        <p>Already have an account? <a href="#" class="underline text-green-800">Sign in</a>.</p>
    </div>
</form>
</body>
</html>
