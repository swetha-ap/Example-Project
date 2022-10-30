<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        @if(isset($data))
            <tr>
            <td>{{$data->firstname}}</td>
            <td>{{$data->lastname}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->password}}</td>
            <td><a href="{{url('logout')}}">logout</a></td>
            </tr>
        @endif
    </table>
</body>
</html>