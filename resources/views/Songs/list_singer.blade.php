<h1>all the singers</h1>
<u>
    @foreach ($singer as $singers)
            <a href="{{ route('songs.singerlist', $singers->id) }}">{{$singers->name}}</a>
            <br>
    @endforeach
</u>