<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
    <style>
        body {
            font-family:'Poppins', sans-serif;
            background-color: #4f6f52;
        }
        h1 { color: #4f6f52; font-weight:bold; }
        label { display: block; }
        .data-box {
            padding: 25px;
            margin: 50px 70px;
            background-color: #e4c59e;
            border-radius: 8px;
            width: 1000px;
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
            border: 3px solid #4f6f52;
            border-radius: 4px;
            width: 80%;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-weight:bold;
            color:#e4c59e;
            background-color: #4f6f52;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="data-box">
    <div class="upper-div">
            <h1>Add Movie</h1>
            <input type="submit" value="Add Movie">
        </div>
        <form action="{{ route('movies.add') }}" method="POST">
            @csrf 
            <label for="movie_name">Name of Movie:</label>
            <input type="text" id="movie_name" name="movie_name" required>
            
            <label for="genre">Genre of Movie:</label>
            <input type="text" id="genre" name="genre" required>

            <label for="description">Description of Movie:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="release_date">Date of Release</label>
            <input type="date" id="release_date" name="release_date" required>
        </form>
    </div>
</body>
</html>
