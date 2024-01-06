<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Create new items</h1>
        
        <form action="{{route('items.store')}}" method="post">
            @csrf
            @method('post')
            <input type="text" name="name">
            <input type="text" name="price">
            <input type="text" name="description">
            <button type="submit">Create Product</button>
        </form>
    </div>
    
</body>
</html>