<h1>Add a song</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br><br>

    <label for="singer">Singer:</label>
    <input type="text" id="singer" name="singer" required><br><br>

    <label for="audio">Audio:</label>
    <input type="text" id="audio" name="audio" required><br><br>

    <label for="lyrics">lyrics:</label>
    <textarea id="lyrics" name="lyrics" required></textarea><br><br>

    <label for="photo">Photo URL:</label>
    <input type="text" id="photo" name="photo" required><br><br>

    <input type="submit" value="Add to sing">
</form>