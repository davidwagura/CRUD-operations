<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <u>Edit car details:</u>
    </h1>
    <div>
        <form action="{{ route('car.update', ['car' => $car]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="{{ $car->name }}">
            </div>
            <div>
                <label for="model">Model:</label>
                <input type="text" name="model" value="{{ $car->model }}">
            </div>
            <div>
                <label for="description">Description:</label>
                <input type="text" name="description" value="{{ $car->description }}">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>