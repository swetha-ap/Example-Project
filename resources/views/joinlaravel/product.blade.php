<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body onload='get_Category()'>
    <form action="" method="post">
        @csrf
        <label for="name">enter product name</label>
        <input type="text" name="name" id=""><br>
        <label for="price">enter product price</label>
        <input type="text" name="price" id=""><br>
        <label for="date">add date</label>
        <input type="date" name="pdate" id=""><br>
        <label for="category">enter category</label>
        <select name="category" id="catg">
           
        </select>
        <br>
        <button type="submit">submit</button>
    </form>
    @if(isset($msg))
    <script>
        alert('{{ $msg }}');
    </script>
    @endif

    <!-- ajax fn to get categories in select box on load -->
    <script>
        function get_Category(){
            // alert("helo")
            $.ajax({
                url:'get_productcategory',
                type:'GET',
                success:function(response){
                    // console.log(response.cat)
                    category="";
                    for(i in response.cat){
                    category += "<option value="+ response.cat[i]['id'] +">" + response.cat[i]['name'] + "</option>"
                    }
                    $('#catg').append(category);
                }
            })
        }
    </script>
</body>
</html>