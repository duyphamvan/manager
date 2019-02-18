<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($listCustomer as $item)
        <tr>
        <td>{{ $item->id }}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->email}}</td>
            <td>
                <a href="{{route('show',$item->id)}}">Xem</a> | <a href="{{route('edit',$item->id) }}">Sửa</a> | <a href="{{route('delete',$item->id)}}">Xóa</a>
            </td>
    </tr>
    @endforeach


    </tbody>
</table>
</body>
</html>