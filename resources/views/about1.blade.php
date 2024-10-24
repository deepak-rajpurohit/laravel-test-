<div>
    <h1>About page</h1>
    {{-- <h3>{{ URL::current() }}</h3> --}}
    <h3>{{ URL()->current() }}</h3>
    <h3>{{ URL::full() }}</h3>
    <h3>{{ URL::previous() }}</h3>

{{-- <a href="/home1">Home Page</a> -- // it has one more way to create link --}}
<a href="/welcome">Welcome Page</a>
<a href="{{ URL::to('home1') }}">Home Page</a>

    <!-- An unexamined life is not worth living. - Socrates -->
</div>
