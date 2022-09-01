<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"> <!--enctype used to send file to db -->
    @csrf
        <label for="">NAME:</label>
        <input type="text" name="name" id="">
        <br>
        <label for="">EMAIL:</label>
        <input type="text" name="email" id="">
        <br>
        <label for="">Upload:</label>
        <input type="file" name="upload" id="">
        <br>
        <button type="submit">SUBMIT</button>
    </form>
    @if(isset($msg))
    {{ $msg }}
    @endif
</body>
</html>