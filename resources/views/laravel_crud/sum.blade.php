<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src=    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container" style="border:1px solid black;">
    <h1 align="center">ADDITION</h1>
    <form action="" method="post">
     @csrf  
    <br /><br />
     <div class="row">
        <div class="col-2">
            <label for="">enter first number:</label>
        </div>
        <div class="col-2">
            <input type="text" name="no1" id="" placeholder="enter first number">
        </div>
     </div>
     <br />
     <div class="row">
        <div class="col-2">
            <label for="">enter second number:</label>
        </div>
        <div class="col-2">
            <input type="text" name="no2" id="" placeholder="enter second number">
        </div>
     </div>
     <br />
     <div class="row">
        <div class="col-2">
            <button type="submit">ADD</button>
        </div>
     </div>
    </form>
    @if(isset($sum))
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
            <p>SUM : {{ $sum }}</p> <!--key name 'sum' in controllers where result is stored is accessed here-->
        </div>
    </div>
    @endif
    </div>
</body>
</html>