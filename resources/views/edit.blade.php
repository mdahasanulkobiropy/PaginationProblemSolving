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
           <form action="{{route('update.user',$user->id)}}" method="post">
                    @csrf
                <div>
                    <label for="">Name</label>
                    <input name="name" type="text" value="{{$user->name}}">
                </div>
                <div>
                    <label for="">Eamil</label>
                    <input name="email" type="email" value="{{$user->email}}">
                </div>
                <div>
                    <input name="page" type="hidden" value="{{$pageNum}}">
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
               
           </form>
        </div>
    </div>
    
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>