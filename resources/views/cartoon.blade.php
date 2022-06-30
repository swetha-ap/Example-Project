<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        #div1{
            position: relative;
            height: 150px;
            width:100px
        }
    </style>
</head>
<body>
   <div id="div1">
    <img id="img1" src="{{ asset ('images/jerry.jpg') }}" class="img-fluid">
   </div> 
   <script>
     
        $(document).keydown(function(e){
            // right
            if(e.keyCode == 39){
               $("#div1").animate({
                left:"+=50px"
               })
            // console.log(e.keyCode)
            }
            // bottom
            if(e.keyCode == 40){
                $("#div1").animate({
                top:"+=50px"
               })
            }
            // left
            if(e.keyCode == 38){
                $("#div1").animate({
                top:"-=50px"
               })
            }
            // up
            if(e.keyCode == 37){
                $("#div1").animate({
                left:"-=50px"
               })
            }
        })
    
//     $(document).keydown(function(e){
//     if (e.keyCode > 36 && e.keyCode < 41) 
//       alert( "arrowkey pressed" );          
// })
   </script>
</body>
</html>