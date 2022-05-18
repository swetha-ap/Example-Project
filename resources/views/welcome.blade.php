<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
    <br />
    <img src="../images/flower.jpg" alt="">
    <br /><br />
    @yield('content')
    <a href="{{ route ('link1') }}">click1</a>
    <br /><br />
    <a href="{{ route ('link2') }}">click2</a>
    <br /> <br />
    
    
</body>
</html>