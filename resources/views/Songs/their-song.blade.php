<h1>My song</h1>

<ul>
        @foreach ($singer->songs as $song)
        <li>
            <a href="{{ route('songs.show', $song->id) }}">
                {{ $song->title }}
            </a>
        </li>
    @endforeach
</ul>

<a href="{{ route('songs.singer') }}"> Back to singers</a>