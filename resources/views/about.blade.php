<div>
    <h1>About Page</h1>
    <h2>{{ $user }}</h2>
    <h3>{{ rand() }}</h3>

    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>
<div>
    <h2>{{ $users[1] }}</h2>

    @if($user=='Deepak')
    <h2>This is Deepak</h2>
    @elseif ($user=='Ratan')
    <h2>This is Ratan</h2>
    @else
    <h2>Other user</h2>
    @endif
</div>
<div>
    @foreach ($users as $user )
    <h2>{{ $user }}</h2>

    @endforeach

    @for($i = 0; $i < 10; $i++)
        <h5>{{ $i }}</h5>
    @endfor
</div>
