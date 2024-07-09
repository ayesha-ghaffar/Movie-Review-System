<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Data</title>
    <style>
        body {
            font-family:'Poppins', sans-serif;
            background-color: #01204e;
        }
        h1 { color: #01204e; font-weight:bold; }
        h2 { margin-bottom: 5px; }
        p { margin-top: 8px; margin-bottom: 0; }
        .data-box {
            padding: 25px;
            margin: 50px 70px;
            background-color: #add8e6;
            border-radius: 8px;
            width: 1000px;
        }
        .movie-item {
            padding: 10px;
            position: relative; 
            border-bottom: 2px solid  #01204e;
        }
        .upper-div {
            margin-bottom: 10px; 
            display:flex;
            justify-content: space-between;
            align-items: center;
        }
        .edit-button {
            padding: 10px 20px;
            position: absolute;
            color:  #ffbf00;
            background-color: #01204e;
            border-radius: 6px;
            top: 15px; 
            right: 18px; 
        }
        .add-button {
            padding: 10px 40px;
            color: #01204e;
            background-color: #ffbf00;
            border-radius: 6px;
        }
        .view-detail-button{
            padding: 5px 20px;
            margin: 0px 20px;
            color: #01204e;
            background-color: #ffbf00;
        }
    </style>
</head>
<body>
    <div class="data-box">
        <div class="upper-div">
        <h1>Movies Data</h1>
            <form action="{{route('movies.addform')}}" method="get">
                <button type="submit" class="add-button">Add New Movie to Data</button>
            </form>
        </div>
      
        <ul class="movie-list">
            @foreach ($movies as $movie)
            <li class="movie-item">
                <h2>{{ $movie->movie_name }}</h2>
                <p><strong>Genre of movie:</strong> {{ $movie->genre }} 
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>Date of Release:</strong> {{ $movie->release_date }}</p>
                <p><strong>Description of movie:</strong> {{ $movie->description }}</p>
                <form action="{{ route('movies.updateform', ['id' => $movie->id]) }}" method="get">
                    <button type="submit" class="edit-button">Edit</button>
                </form>
                <form action="{{ route('movies.specific', ['id' => $movie->id]) }}" method="get">
                    <button type="submit" class="view-detail-button">View Details</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
