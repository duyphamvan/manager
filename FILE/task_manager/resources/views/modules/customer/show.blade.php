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
    <p>Customer Info</p>
    <p>ID: {{$customer->id}}</p>
    <p>Name: {{$customer->name}}</p>
    <p>Phone: {{$customer->phone}}</p>
    <p>Email: {{$customer->email}}</p>
    <p>Address: {{$customer->address}}</p>
</body>
</html>