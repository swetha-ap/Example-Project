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
<body onload='show_data()'>
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
        <table class="table" id="table_show">
            <thead>
                <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>PASSWORD</td>
                </tr>
            </thead>
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
                show_data();
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
        //to show data from db
        function show_data(){
            $.ajax({
                url:'arshow',
                type:'GET',
                success:function(Response){
                    // console.log(Response.data_retrieve); //shows all data in db in array format
                    // now append data in table
                    db_data=Response.data_retrieve; //storing db values to a variable
                    $('.permanent').remove();  //to remove repeatation of rows, we delete rows with same classname before for loop
                    for(i=0;i<db_data.length;i++){
                        $('#table_show').append('<tr class="permanent"><td>'+ db_data[i].id  //calling table using its id
                         +'</td><td>'+ db_data[i].name
                         +'</td><td>'+ db_data[i].email
                         +'</td><td>'+ db_data[i].password 
                         +'</td><td> <button onclick="delete_row('+ db_data[i].id  +')">DELETE</button> </td></tr>')
                    }
                }
            })
        }
         //DELETE FN
         function delete_row(get_id){
            $.ajax({
                url:'ardelete',
                type:'POST',
                data:{ 
                    delete_id:get_id  //passing id of the row to be deleted
                    },
                success:function(){
                  show_data();     
                }
            })
            // alert(get_id);
         }
       
    </script>
</body>
</html>