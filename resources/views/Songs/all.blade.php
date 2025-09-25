<h1>all the songs</h1>
<u>
    @foreach ($songs as $song)
            <a href="{{ route('songs.show', $song->id) }}">{{ $song->title }} -
                Singer: {{ $song->singer }} - Category: {{ $song->category }}</a> <a href="{{ route('songs.edit', $song->id) }}">[Editer] <a href="{{ route('songs.delete', $song->id) }}">[Delete]</a>
            <br>
    @endforeach
</u>