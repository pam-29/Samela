<head>
    <link rel="stylesheet" href="{{asset('styles/song.css')}}"/>
    <link rel="stylesheet" href="{{ asset('styles/list.css') }}">
    <link rel="icon" href="/logo-header.png" type="image/x-icon">
    <title>Songs</title>
</head>

<div class="btn">
            <a href="{{ route('home') }}">Home</a>
</div>


<h1>All songs</h1>

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

<div class="container-song">
            <ul class="list-song">
                @foreach ($songs as $song)
                    <li class="list-song-item">
                            <a href="{{ route('songs.show', $song->id) }}" class="song">{{ $song->title }} -
                                {{ $song->singer }} - Category: {{ $song->category }}
                            </a>
                        </li>
                @endforeach
            </ul>
</div>