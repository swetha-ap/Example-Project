<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body>
<form>
    <!-- vertical -->
    <h1>Vertical forms</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <!-- horizontal -->
  <br />
  <h1>Horizontal forms</h1>
  <br />
  <div class="form-group row">
      <div class="col-2">
    <label for="exampleInputEmail1">Email address</label>
  </div>
  <div class="col-6">
    <input type="email" class="form-control" id="exampleInputEmail1" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
  </div>
  <div class="form-group row">
    <div class="col-2">
  <label for="exampleInputPassword1">Password</label>
  </div>
  <div class="col-4">
    <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
  </div>
  <div class="form-group form-check row">
      <div class="col-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </div>
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
</body>
</html>