<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <label for="name">enter category name</label>
        <input type="text" name="name" id=""><br>
        <label for="desc">enter category desc</label>
        <input type="text" name="desc" id=""><br>
        <label for="incharge">enter category incharge</label>
        <input type="text" name="incharge" id=""><br>
        <button type="submit">register</button>
    </form>
    @if(isset($msg))
    <script>
        alert('{{ $msg }}');
    </script>
    @endif
</body>
</html>