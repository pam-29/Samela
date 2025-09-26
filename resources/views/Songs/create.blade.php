
<link rel="stylesheet" href="{{ asset('styles/form.css') }}">
<link rel="icon" href="/logo-header.png" type="image/x-icon">
    <title>Create</title>

<div class="container">
    <h1>Add a song to archive</h1>

    <form action="{{ route('songs.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter song title"required><br><br>

        <label for="singer">Singer:</label>
        <input type="text" id="singer" name="singer" placeholder="Enter singer's name"required><br><br>

        <label for="audio">Audio:</label>
        <input type="text" id="audio" name="audio" placeholder="Enter audio URL"required><br><br>

        <label for="lyrics">lyrics:</label>
        <textarea id="lyrics" name="lyrics" placeholder="Enter lyrics " required></textarea><br><br>

        <label for="photo">Photo URL:</label>
        <input type="text" id="photo" name="photo" placeholder="Enter photo URL" required><br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" placeholder="Enter category" required><br><br>

        <div class="btn">
            <input type="submit" value="Add to songs">
        </div>
    </form>
</div>