<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>product name</td>
            <td>product price</td>
            <td>category name</td>
            <td>category incharge</td>
        </tr>
        @foreach($product as $i)
        <tr>
            <td>{{ $i->pname }}</td>
            <td>{{ $i->price }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->incharge }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>