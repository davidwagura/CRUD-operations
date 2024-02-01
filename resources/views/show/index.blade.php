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
            text-align: center;
        }
        table {
            align-items: center;
        }
        
    </style>
    <h1>
        <u>Fill in the table below:</u>
    </h1>
    <div>
        <table>
            <tr>
                <th>Id:</th>
                <th>Name:</th>
                <th>Model:</th>
                <th>Description:</th>
            </tr>
            @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->description }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>