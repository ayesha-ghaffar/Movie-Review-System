<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <style>
         body {
            font-family:'Poppins', sans-serif;
            background-color: #76abae;
        }
        h1 { color: #01204e; font-weight:bold; }
        h2 { margin-bottom: 5px; }
        p { margin-top: 8px; margin-bottom: 0; }
        .data-box {
            padding: 25px;
            margin: 50px 70px;
            background-color: #eeee;
            border-radius: 8px;
            width: 900px;
        }
        .movie-item {
            padding: 10px;
            position: relative; 
        }
    </style>
</head>
<body>
    <div class="data-box">
        <h1>Movie Details</h1>
        <ul class="movie-list">
            <li class="movie-item">
                <h2>{{ $movie->movie_name }}</h2>
                <p><strong>Description of Movie:</strong> {{ $movie->description }}</p>
                <p><strong>Genre of Movie:</strong> {{ $movie->genre }}</p>
                <p><strong>Date of Release:</strong> {{ $movie->release_date }}</p>
            </li>
        </ul>
    </div>
</body>
</html>
