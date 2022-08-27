<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
    <br><br><br>
    <div class="container" style="width: 500px; height: 350px; border: 2px solid black;">
        <form action="" method="post" >
            @csrf
            <br><h2 align="center">LOGIN </h2><br>
            <input type="text" name="email" id="" placeholder="enter email" class="form-control">
            <br><br>
            <input type="password" name="password" id="" placeholder="enter password" class="form-control">
            <br><br>
            <button type="submit" class="btn btn-primary">LOGIN</button>
        </form>
    </div>
    <!-- @if(isset($email))
    {{ $email->email }}
    @endif -->
    @if(isset($error))
     <script>
        alert('{{ $error }}');
     </script>
    @endif
</body>
</html>