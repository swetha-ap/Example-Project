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
    <div>
        <p>hi</p>
        <h1>hello</h1>
    </div>
    <ul>
        <li>a1</li>
        <li>a2</li>
    </ul>
    <div>
        lorem3
        <div>
            bonjour
        </div>
    </div>
    <div>namaste</div>
    <div>vanakam</div>
    <script>
        $().ready(function(){
            // traversing between parent,children,siblings
        //    console.log( $("li").parent())
        //    console.log( $("div").children())
        //    console.log( $("p").siblings())
        //    console.log( $("div").siblings())
        //    console.log( $("li").parent().parent())
        //    console.log( $("body").children("ul").children())
        //    console.log( $("div").first().html())
        //    console.log( $("div").last().html())
                //   to get content of div with index no from 0
        console.log( $("div").eq(0).html())
        console.log( $("div").eq(1).html())
        console.log( $("div").eq(2).html())
        console.log( $("div").eq(3).html())
        console.log( $("div").eq(4).html())
        })
    </script>
</body>
</html>