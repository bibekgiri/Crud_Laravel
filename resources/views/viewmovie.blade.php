<!DOCTYPE html>
<html lang="en">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        form input[type="text"] {
            width: calc(100% - 80px);
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <form action="{{route('movie.create')}}" method="post">
@csrf
<label for="name">Name:</label>
        <input type="text" name="name" placeholder="name">

<br>
<br>
        <button> submit </button>


    </form>

    <table border="1px">

<thead>

    
        <th>Movie name</th>
    
</thead>
<tbody>
    @foreach ($movies as $movie)    
    {{-- first one table name and second one is varibale  --}}
    <tr>
        <td>{{ $movie->id}}</td> 
        <td>{{ $movie->name}}</td>
        <td><a href="{{route('movie.edit',$movie->id)}}">edit</a></td>
        <td><a href="{{route('movie.delete',$movie->id)}}">delete</a></td>
    </tr>
    @endforeach
</tbody>

    </table>
</body>
</html>