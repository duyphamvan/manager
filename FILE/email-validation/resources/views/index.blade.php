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
    <h1>Ung dung kiem tra email hop le</h1>
    <form method="get">
        <p>@csrf</p>
        <label for="email-input">Email:</label>
        <input type="email" id="email-input" placeholder="Nhap email can kiem tra" name="email">
        <input type="submit" value="Check">
    </form>
    @if(!empty(request(['email'])))
        Ket qua: {{$check?'Dung dinh dang Email':'Sai dinh dang Email'}}
    @endif
</body>
</html>