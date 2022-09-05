<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        
            <label for="">NAME</label>
            <input type="text" name="" id="name">
            <label for="" id="show"></label>
            <br>
            <label for="">EMAIL</label>
            <input type="text" name="" id="email">
            <br>
            <label for="">PASSWORD</label>
            <input type="text" name="" id="pswd">
            <br>
            <button type="submit" id="submit">SUBMIT</button>
   
        <br><br><br>
        <table class="table">
            <thead>
                <tr>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>PASSWORD</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $.ajaxSetup({
          headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $('#submit').click(function(){
            // alert('button working');
            $.ajax({           //calling ajax fn
              url:'ar',        //route view name of post 
              type:'POST',
              data:{
                get_name:$('#name').val(),
                get_email:$('#email').val(),
                get_pswd:$('#pswd').val()
              },
              
              success:function(){
                alert('ajax working');
              }
            })
        })
        //to check if a name is present in db
        $('#name').change(function(){  
            inserted_name=$(this).val(); //this is used as we are calling the same variable ie name
            if(inserted_name!=''){
                $.ajax({
                    url:'archeck',
                    type:'POST',
                    data:{
                        name:inserted_name
                    },
                    success:function(Response){
                        // alert(Response.msg)
                        document.getElementById('show').innerHTML=Response.msg;
                    }
                })
            }
        })
       
    </script>
</body>
</html>