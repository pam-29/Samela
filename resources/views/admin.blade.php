<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="admin-container">
        @extends('Songs.all')

        @section('content')
        <div class="logo-admin">
            <img src="samela.png" alt="">
        </div>

        <a href="{{ route('songs.create')}}" class="btn btn-success btn-create">Add a song</a>

        @if (session('success'))
            <div id="flash-message" class="flash-message">
                {{ session('success') }}
            </div>
        @endif

        @if (session('great'))
            <div id="flash-message" class="flash-message">
                {{ session('great') }}
            </div>
        @endif

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let flash = document.getElementById("flash-message");
            if (flash) {
                setTimeout(() => {
                    flash.style.transition = "opacity 0.5s ease";
                    flash.style.opacity = "0";
                    setTimeout(() => flash.remove(), 500);
                }, 2000); // 5 secondes
            }
        });
    </script>

</body>
</html>


