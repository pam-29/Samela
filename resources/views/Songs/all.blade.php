<head>
    <link rel="stylesheet" href="{{asset('styles/admin.css')}}"/>
</head>

<div class="container-list">
    <h1>All songs</h1>

        <div>
            <ul class="list">
                @foreach ($songs as $song)
                    <li class="list-item">
                            <a href="{{ route('songs.show', $song->id) }}" class="song">{{ $song->title }} -
                                Singer: {{ $song->singer }} - Category: {{ $song->category }}
                            </a> 
        
                            <div class="btn-list">
                                <a href="{{ route('songs.edit', $song->id) }}" class="btn-edit">Edit </a>
                                <a href="{{ route('songs.delete', $song->id) }}" class="btn-delete">Delete</a>
                            </div>
                        </li>
                @endforeach
            </ul>
        </div>
</div>

