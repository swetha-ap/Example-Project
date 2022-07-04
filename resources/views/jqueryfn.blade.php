<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .name{
            color:blue
            /* font-size: large; */
        }
        .name2{
            color:red
        }
        div{
            height: 200px;
            width: 250px;
            background-color: brown;
            border: solid 2px black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <ul class="name">
        <li>A</li>
        <li>B</li>
        <li>C</li>
    </ul>
    <div>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quasi voluptatum eos ex, expedita autem, sunt facere accusantium quo assumenda sed doloribus ad quia quas at consectetur. Repudiandae, sit quo.
    </div>
    <button >click</button>
    <script>
        $().ready(function(){
            $("button").click(function(){
                //    to remove tag
            // $("ul").remove()
                //   to remove children within tag
            // $("ul").empty()
            // $("ul").addClass("name1")
            // $("ul").addClass("name2")
            // to change class
            // $("ul").attr("class","name2")
           
            })
            console.log("width="+$("div").width())
            console.log("height="+$("div").height())
            console.log("inner width="+$("div").innerWidth())
            console.log("outer height="+$("div").outerHeight())
            console.log("outer width="+$("div").outerWidth())
            console.log("inner height="+$("div").innerHeight())
        })
        
    </script>
</body>
</html>