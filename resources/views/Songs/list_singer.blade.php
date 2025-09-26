<link rel="stylesheet" href="{{ asset('styles/list.css') }}">
<link rel="icon" href="/logo-header.png" type="image/x-icon">
<title>Singers</title>

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

        <div class="btn">
            <a href="{{ route('home') }}">Home</a>
        </div>

        <div class="container">
            <h1>All the singers</h1>
            <div class="container-list">
                <u class="singer-list">
                    @foreach ($singer as $singers)
                            <a class="list-item" href="{{ route('songs.singerlist', $singers->id) }}">
                                {{ $singers->name }}
                            </a>
                    @endforeach
                </u>
                </div>
        </div>
</body>