<a href="{{ route('songs.list') }}">Back</a>


<div>
    <h1>{{$song->singer}}</h1>
    <h2>{{$song->title}}</h2>
    <p>Category: {{$song->category}}</p>
    <img src="{{$song->photo}}" alt="">
    <iframe src="{{$song->audio}}" frameborder="0"></iframe>
    <iframe src="{{$song->lyrics}}" frameborder="0"></iframe>
</div>