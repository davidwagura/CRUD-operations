<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product</h1>
    </div>
    <form action="{{route('car.update', ['car' => $car ])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="name" value="{{$car->name}}">
        </div>
        <div>
            <label for="price">Price:</label> 

            <input type="text" name="price" placeholder="price" value="{{$car->price}}">
        </div>
        <div>
            <label for="price">Model:</label>
            <input type="text" name="model" placeholder="model" value="{$car->model}">
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" name="description" placeholder="description" value="{{$car->description}}">
        </div>

        <div>
            <input type="submit" value="index"/> 
        </div>
    </form>
</body>
</html>