<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="logo"">
            <img src="samela.png" alt="">
        </div>
    
        <div class="content">
            <h1>The place where you can free and deliver your soul from Beyonce !</h1>
    
            <div class="btn">
                <a href="{{ route('songs.singer') }}">Choose a song by artist</a>
                <a href="{{route('songs.showsong')}}">Browse songs</a>
            </div>
        </div>
    </div>
</body>
</html>