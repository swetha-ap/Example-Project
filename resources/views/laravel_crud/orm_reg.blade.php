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
        <label for="">FIRST NAME</label>
        <input type="text" name="fname" id="">
        <br /><br>
        <label for="">LAST NAME</label>
        <input type="text" name="lname" id="">
        <br /><br>
        <label for="" style="padding-right:40px;">EMAIL</label>
        <input type="email" name="email" id="">
        <br /><br>
        <label for="" style="padding-right:5px;">PASSWORD</label>
        <input type="password" name="pswd" id="">
        <br /><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br><br><br>
    <table style="border:1px solid black;">
        <tr >
            <td>ID</td>
            <td>FIRST NAME</td>
            <td>LAST NAME</td>
            <td>EMAIL</td>
            <td>PASSWORD</td>
        </tr>
        @foreach($data as $i)
        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->firstname}}</td>
            <td>{{$i->lastname}}</td>
            <td>{{$i->email}}</td>
            <td>{{$i->password}}</td>
            <td><a href="{{url('delete_data')}}/{{$i->id}}">DELETE</a></td>
            <td><a href="{{url('nonupdated_data')}}/{{$i->id}}">UPDATE</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>