<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5" >
    <div class="row ">
        <div class="col-sm-12">
            <h2 class="text-center">Caculator</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <form action="{{route('result')}}" method="post" class="mt-2">
                <p>@csrf</p>
                <div class="input-group col-md-6 offset-md-3 mb-4">
                    <div class="input-group-prepend ">
                        <span class="input-group-text">Numberone and Numbertwo</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control text-center" name="numberOne">
                    <input type="text" aria-label="Last name" class="form-control text-center" name="numberTwo">
                </div>
                <input type="submit" value="Addition(+)" name="add" class="btn btn-success btn-group-lg">
                <input type="submit" value="Subtraction(-)" name="sub"  class="btn btn-primary btn-group-lg">
                <input type="submit" value="Multiplication(x)" name="mul"  class="btn btn-info btn-group-lg">
                <input type="submit" value="Division(/)" name="div"  class="btn btn-danger btn-group-lg">

            </form>
        </div>
    </div>
</div>


</body>
</html>