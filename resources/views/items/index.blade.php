<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="{{route('items.create')}}">Create New items</a>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>price</th>
                <th>description</th>
                <th>action</th>
            </tr>
            @foreach ($items as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <a href="{{ route('items.edit',['item'=> $item->id])}}">Edit</a>
                </td>

                <td>
                    <form action="{{route('items.destroy',['item'=> $item->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        
            @endforeach
            
        </table>
    </div>
</body>
</html>