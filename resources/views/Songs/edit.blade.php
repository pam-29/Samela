<link rel="stylesheet" href="{{ asset('styles/form.css') }}">

<div class="container">
    <h1>Edit a song</h1>

    <form action="{{ route('songs.update', $song->id) }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter song title" value="{{ $song->title }}" required><br><br>

        <label for="singer">Singer:</label>
        <input type="text" id="singer" name="singer" placeholder="Enter singer name" value="{{ $song->singer }}"  required><br><br>

        <label for="audio">Audio:</label>
        <input type="text" id="audio" name="audio" placeholder="Enter audio URL" value="{{ $song->audio }}" required><br><br>

        <label for="lyrics">Lyrics:</label>
        <textarea id="lyrics" name="lyrics" placeholder="Enter lyrics" required>{{ $song->lyrics }}</textarea><br><br>

        <label for="photo">Photo URL:</label>
        <input type="text" id="photo" name="photo" placeholder="Enter photo URL" value="{{ $song->photo }}" required><br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" placeholder="Enter category" value="{{ $song->category }}" required><br><br>

        <input type="submit" value="Edit a song">
    </form>
</div>