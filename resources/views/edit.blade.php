<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie</title>
    <style>
        body {
            font-family:'Poppins', sans-serif;
            background-color: #8e3e63;
        }
        h1 { color:#8e3e63; }
        label { display: block; }
        .data-box {
            padding: 25px;
            margin: 50px 70px;
            background-color: #cae6b2;
            border-radius: 8px;
            width: 900px;
        }
        .upper-div { 
            display:flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px; 
        }

        input[type="text"], textarea {
            margin-bottom: 10px;
            padding: 5px;
            border: 3px solid #8e3e63;
            border-radius: 4px;
            width: 80%;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-weight:bold;
            color:#cae6b2;
            background-color: #4CAF50;
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <div class="data-box">
        <div class="upper-div">
            <h1>Update Movie</h1>
            <input type="submit" value="Update Movie">
        </div>
        
        <form action="{{ route('movies.update', ['id' => $movie->id]) }}" method="POST">
            @csrf 
            <label for="movie_name">Name of Movie:</label>
            <input type="text" id="movie_name" name="movie_name" value="{{$movie->movie_name}}" required>

            <label for="genre">Genre of Movie:</label>
            <input type="text" id="genre" name="genre" value="{{$movie->genre}}" required>

            <label for="description">Description of Movie:</label>
            <input type="text" id="description" name="description" value="{{$movie->description}}" required>

            <label for="release_date">Date of Release:</label>
            <input type="date" id="release_date" name="release_date" value="{{$movie->release_date}}" required>
        
        </form>
    </div>
</body>
</html>
