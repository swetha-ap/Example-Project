<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ url('updatedata') }}/{{ $non_updated_data->id }}" method="post">
        @csrf
        <label for="">FIRST NAME</label>
        <input type="text" name="fname" id="" value="{{ $non_updated_data->firstname }}">
        <br /><br>
        <label for="">LAST NAME</label>
        <input type="text" name="lname" id=""  value="{{ $non_updated_data->lastname }}">
        <br /><br>
        <label for="" style="padding-right:40px;">EMAIL</label>
        <input type="email" name="email" id=""  value="{{ $non_updated_data->email }}">
        <br /><br>
        <label for="" style="padding-right:5px;">PASSWORD</label>
        <input type="password" name="pswd" id=""  value="{{ $non_updated_data->password }}">
        <br /><br>
        <button type="submit" name="update">UPDATE</button>
    </form>
</body>
</html>