<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" name="form1" onsubmit="return validate()" >
    <label for="name">Name</label>
    <input type="text" name="name1" id="name" placeholder="Enter Name">
    <label id="namelabel"></label>
    <br /><br />
    <label for="place">Place</label>
    <input type="text" name="place1" id="place" placeholder="Enter Place">
    <label id="placelabel"></label>
    <br /><br />
    <label for="email">Email</label>
    <!-- <input type="email" name="email1" id="email" placeholder="Enter Email" required> -->
    <input type="text" name="email1" id="email" placeholder="Enter Email">
    <label id="emaillabel"></label>
    <br /><br />
    <button type="submit">Submit</button>
    </form>

    <script>
        function validate(){
        //    name=document.getElementById('name').value
        //   using form name to call input values
           name=document.forms["form1"]["name1"].value
           place=document.forms["form1"]["place1"].value
           email=document.forms["form1"]["email1"].value
           returnval=true
           if(name == ""){
            // alert('enter name')
            document.getElementById('namelabel').innerHTML="Enter Name!!!"
            document.forms["form1"]["name1"].focus()
            // return false
            returnval=false
           }
           if(place == ""){
            document.getElementById('placelabel').innerHTML="Enter Place!!!"
            document.forms["form1"]["place1"].focus()
            returnval=false
           }
           if(email == ""){
            document.getElementById('emaillabel').innerHTML="Enter Email!!!"
            document.forms["form1"]["email1"].focus()
            returnval=false
           }
           mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
           if(!email.match(mailformat)){
            document.getElementById('emaillabel').innerHTML="Enter Valid Email!!!"
            returnval=false
           }
           return returnval
        }
    </script>
</body>
</html>