<h1>all the songs</h1>
<u>
    @foreach ($songs as $song)
            <a href="{{ route('categories.show', $song->id) }}">{{ $song->title }} -
                Singer: {{ $song->singer }} - Category: {{ $song->category }}</a> <a href="{{ route('categories.edit', $song->id) }}">[Editer]</a>
            <br>
    @endforeach
</u>