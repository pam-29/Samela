<link rel="stylesheet" href="{{ asset('styles/info.css') }}">
<link rel="icon" href="/logo-header.png" type="image/x-icon">
    <title>Songs</title>


<body>

        <div class="btn">
            <a href="{{ route('home') }}">Home</a>
        </div>

    <div class="container">

        <div class="logo">
            <img src="{{ asset('samela.png') }}" alt="Logo">
        </div>

            <h1>🎶{{ $song->title }}🎶</h1>

            <p>🎤{{ $song->singer }}🎤</p>

                    @if($song->audio)
                        @php
                            $raw = $song->audio;
                            $audioSrc = preg_match('/^https?:\\/\\//i', $raw) ? $raw : asset('storage/' . ltrim($raw, '/'));
                        @endphp

                        <audio id="song-audio" controls preload="none">
                            <source id="song-source" src="{{ $audioSrc }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    @else
                        <p>No audio available.</p>
                    @endif

                    @if($song->photo)
                        <img src="{{ $song->photo }}" alt="" class="song-photo">
                    @endif

                    @if($song->lyrics && preg_match('/^https?:\\/\\//i', $song->lyrics))
                        <iframe src="{{ $song->lyrics }}" frameborder="0" ></iframe>
                    @elseif($song->lyrics)
                        <div class="lyrics">
                            {!! nl2br(e($song->lyrics)) !!}
                        </div>
                    @endif
    </div>
</body>
