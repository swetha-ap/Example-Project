<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <p id="p1" style="display:none ;">hello</p>
    <button id="btn1">click</button>
    <!-- <div id="d1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam aperiam iste itaque ducimus laboriosam, ipsa voluptates aut expedita non consequatur. Similique quos reprehenderit commodi nesciunt rem? Vero facere quaerat illum.</div> -->
    <div id="d2" style="height: 150px; width:100px; background-color: blue;position: relative; ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis sed delectus ipsum libero, quibusdam </div>
    
    <script>
        $(document).ready(function(){
            // var a = $("#p1").html()
            // $("#p1").html("welcome")
            // console.log(a)

            // $("#p1").click(function(){
            //     var a = $("#p1").html()
            //     // var a=$(this).html()
            //      alert(a)
            // })

            // $("#p1").click(function(){
            //     $(this).hide()
            // })

            
            $("#btn1").click(function(){
                // $("#d1").hide()
                // $("#p1").show()
                // $("#p1").toggle()
               // $("#d2").fadeOut(4000)
                // $("#d2").fadeTo(4000,0.2)
                // $("#d2").fadeToggle(4000)
                // $("#d2").slideUp(4000)
                // $("#d2").slideDown(4000)
                // $("#d2").slideToggle(4000)
                    // Chaining
                // $("#d2")
                // .slideDown(2000)
                // .delay(2000)
                // .slideUp(3000)
                $("#d2")
                .animate({
                    // height:"300px",
                    // width:"200px"
                    left:"1000px"
                
                })
                .delay(1000)
                .animate({
                    top:"700px"
                 })
                 .delay(1000)
                .animate({
                    left:"0px"
                })
                .delay(1000)
                .animate({
                    top:"0px"
                })
            })
         })
    </script>
</body>
</html>