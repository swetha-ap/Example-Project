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
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
     <!-- @if(isset($retrieve_data))
        <p>{{ $retrieve_data }}</p>
        {{-- {{}} --}}
    @endif  -->
    @forelse($retrieve_data as $i) <!-- associative array where table content is stored in controller fn -->
    <tr>
      <td>{{ $i->id }}</td>
      <td>{{ $i->firstname }}</td>
      <td>{{ $i->lastname }}</td>
      <td>{{ $i->email }}</td>
      <td>{{ $i->password }}</td> 
      <td><a href="{{ url('delete') }}/{{ $i->id }}">DELETE</a></td>
      <td><a href="{{ url('update') }}/{{ $i->id }}">UPDATE</a></td>
      @empty
     <td>NO DATA</td>
    </tr>
    @endforelse 
  </tbody>
</table>
<a href="{{ url('logout') }}">LOGOUT</a>
</div>
</body>
</html>