<div>
    <h1>Home Page</h1>
    {{-- <h3>{{ URL::current() }}</h3>  // one more way for current function --}}
    <h3>{{ URL()->current() }}</h3>
    <h3>{{ URL::full() }}</h3>
    <h3>{{ URL::previous() }}</h3>
<a href="/about1">About Page</a>
<a href="/welcome">Welcome Page</a>


    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
