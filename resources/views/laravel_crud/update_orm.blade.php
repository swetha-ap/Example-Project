<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('update_data') }}/{{ $non_updated_data->id }}" method="post">
        @csrf
        FIRST NAME
        <input type="text" name="fname" id="" value="{{ $non_updated_data->firstname }}"> <br>
        LAST NAME
        <input type="text" name="lname" id="" value="{{ $non_updated_data->lastname }}"><br>
        EMAIL
        <input type="text" name="email" id="" value="{{ $non_updated_data->email }}"><br>
        PASSWORD
        <input type="text" name="pswd" id="" value="{{ $non_updated_data->password }}"><br>
        <button type="submit">UPDATE</button>
    </form>
</body>
</html>