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
        <form action="" method="get">
            @csrf
            @method('get')
            <label for="name">Name:</label>
            <input type="text" name="name">
            <label for="mode">Model:</label>
            <input type="text" name="model">
            <label for="description">Description:</label>
            <input type="text" name="description">
        </form>
    </div>
</body>
</html>