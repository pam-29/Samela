<h1>all the songs</h1>
<u>
    @foreach ($songs as $song)
        ($song->type == 'Electricpoo')
            <a href="{{ route('categories.show', $song->id) }}">{{ $song->title }} -
                category: {{ $song->singer }} - photo: {{ $song->photo }}</a> <a href="{{ route('categories.edit', $song->id) }}">[Editer]</a>
            <br>
    @endforeach
</u>