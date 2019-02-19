<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="{{route('edit',$customer->id)}}" method="post">
        <p>@csrf</p>
        <input type="text" name="name" value="{{$customer->name}}">
        <input type="text" name="phone"  value="{{$customer->email}}">
        <input type="text" name="email" value="{{$customer->phone}}" >
        <input type="text" name="address"  value="{{$customer->address}}">
        <input type="submit" name="sub" value="Edit">
    </form>
</body>
</html>