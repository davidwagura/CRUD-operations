<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="2">
            <tr>
                <th>Name:</th>
                <th>Price:</th>
                <th>Model:</th>
                <th>Description</th>
            </tr>
            @foreach ($cars as$car )
            <tr>
                <td>{{ $car->name }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->description }}</td>

            </tr>  
            @endforeach
        </table>
    </div>
</body>
</html>