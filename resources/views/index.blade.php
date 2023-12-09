<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <div class="continer">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th>sl</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($users as $key => $item)
                    <tr>
                        <td>{{($page-1)*2 + $key + 1}}</td> <!-- 2 means ItemAmmount per page--->
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            <a href="{{route('edit.user',['page' => $page, 'id' => $item->id])}}">Edit</a>
                            <a href="{{route('delete.user',$item->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    {{ $users->links() }}
                </tfoot>
            </table>
        </div>
    </div>
    
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>