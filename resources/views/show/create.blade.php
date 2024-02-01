<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <u>Create car details:</u>
    </h1>
    <div>
        <form action="{{route("new.store")}}" method="post">
            @csrf
            @method('post')
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="model">Model:</label>
                <input type="text" name="model">
            </div>
            <div>
                <label for="description">Description:</label>
                <input type="text" name="description">
            </div>
            <div>
                <input type="submit" value="Save as new car">
            </div>
        </form>
    </div>
</body>
</html>