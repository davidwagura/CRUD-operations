<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background-color: burlywood;
        }
        
    </style>
    <h1>
        <u>Edit in the table below:</u>
    </h1>
    <div>
        <table border="2">
            <tr>
                <th>Id:</th>
                <th>Name:</th>
                <th>Model:</th>
                <th>Description:</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->description }}</td>
                
            </tr>
            <td>
                <a href="{{ route('car.edit', ['car' => $car ]) }}">Edit</a>
            </td>
            <td>
                <form action="{{route('new.delete', ['car' => $car ])}}" method="post">
                    @csrf
                    @method('delete')

                    <input type="submit" value="delete"/>
                </form>
            </td>       
    @endforeach
        </table>
    </div>
    <div>
        <a href="{{ route('new.add') }}">Add a new car</a>
    </div>
</body>
</html>