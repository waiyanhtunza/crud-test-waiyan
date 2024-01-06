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
        <h1>Update Item</h1>
        
        <form action="{{ route('items.update',[ 'item'=> $item->id]) }}" method="post">
            @csrf
            @method('put')
            <input type="text" name="name" value="{{$item->name}}">
            <input type="text" name="price" value="{{$item->price}}">
            <input type="text" name="description" value="{{$item->description}}">
            <button type="submit">Update</button>
        </form>
    </div>
    
</body>
</html>