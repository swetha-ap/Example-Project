<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .parent{
            /* display: inline-grid; */
            display: grid;
            /* background-image: url('images/flower.jpg'); */
            border:solid 1px black;
        }
        div{
            border:3px solid blue;
        }
        .a{
            grid-column: 1/4;
        }
        .b{
            grid-row: 2/4;
        }
        .e{
            grid-column: 2/4;
        }
    </style>   
</head>
<body>
    <div class="parent">
        <!-- <img src="{{asset ('images/flower.jpg') }}"> -->
        <div class="a">
            <p align="center">header</p>
        </div>
        <div class="b">
            <p align="center">sidebar</p>
        </div>
        <div class="c">
            <p align="center">content1</p>
        </div>
        <div class="d">
            <p align="center">content2</p>
        </div>
        <div class="e">
            <p align="center">footer</p>
        </div>
    </div>
</body>
</html>