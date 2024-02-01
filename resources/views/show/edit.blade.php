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
        <form action="{{ route('car.update') }}" method="post">
            @csrf
            @method('post')
            <label for="name">Name:</label>
            <input type="text" name="name">
            Route::get('/new-car', [CarController::class, 'index']);

            Route::get('/new-car1', [CarController::class, 'create']);
            
            Route::get('/new-car2', [CarController::class, 'edit']);            <label for="mode">Model:</label>
            <input type="text" name="model">
            <label for="description">Description:</label>
            <input type="text" name="description">
        </form>
    </div>
</body>
</html>