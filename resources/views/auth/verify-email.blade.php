@extends("layout")

@section('content')
    <section class="p-8">
    <div class="text-5xl mb-4">
        Thank you for registering! A link to confirm your registration has been sent to your email.
    </div>
    <div>
        Didn't receive the link?
        <form action={{ route("verification.send") }} method="post">
            @csrf
            <button type="submit"
                    class="bg-green-800 text-white py-4 px-5 my-2 mx-0 border-0 cursor-pointer w-3/12 opacity-90 hover:opacity-100">
                Send link
            </button>
        </form>
    </div>
    </section>
@endsection
