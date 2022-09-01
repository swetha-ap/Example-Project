<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>IMAGE</th>
    </tr>
  </thead>
  <tbody>
   @forelse($retrieve_data as $i)
    <tr>
        <td>{{ $i->id }}</td>
        <td>{{ $i->name }}</td>
        <td>{{ $i->email }}</td>
        <td><img src="{{ asset('storage/laravelimages/'.$i->upload) }}" style="height:150px; width:200px;"></td>
        @empty
     <td>NO DATA</td>
    </tr>
    @endforelse
  </tbody>
  </table>
</body>
</html>