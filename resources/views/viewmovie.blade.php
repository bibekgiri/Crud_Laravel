<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('movie.create')}}" method="post">
@csrf

        <input type="text" name="name" placeholder="name">

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