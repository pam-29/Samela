<link rel="stylesheet" href="{{ asset('styles/list.css') }}">
<body>

        <div class="wrapper">
		<span>🎤</span>
        <span>🎶</span>
        <span>✨</span>
        <span>🎷</span>
        <span>🎸</span>
        <span>🎺</span>
        <span>🎹</span>
        <span>🎵</span>

</div>
<div class="container">
        <h1>Songs</h1>

        <div class="container-list">
            <ul>
                @foreach ($singer->songs as $song)
                
                    <a class="list-item"href="{{ route('songs.show', $song->id) }}">
                    {{ $song->title }}
                    </a>
                    
                @endforeach
            </ul>
        </div>
        <div class="btn">
            <a href="{{ route('songs.singer') }}"> Back to singers</a>
        </div>
    </div>
</body>