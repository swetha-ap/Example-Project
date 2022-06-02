<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .parent{
            background-color: rgb(185, 142, 226);
            border: solid 2px black;
            display: grid;
            height: 500px;
            /* display: inline-grid; size fits acc to the contents */
            /* grid-template-columns: auto auto auto ; */
            grid-template-columns: 100px 50px 150px;
            /* grid-template-rows:150px 200px 100px ; */
            column-gap: 20px;
            row-gap: 30px;
            /* gap:30px 50px; */
            /* to set space horizontally b/w contents */
            /* justify-content: center; */
            /* justify-content: end; */
            /* justify-content: start; */
            /* justify-content: space-evenly; */
            /* justify-content: space-around; */
            /* justify-content: space-between; */
            /* to set space vertically b/w contents */
            /* align-content: start; */
            /* align-content: end; */
            /* align-content: center; */
            /* align-content: space-around; */
            /* align-content: space-between; */
            /* align-content: space-evenly; */
        }
        div{
            border: 3px solid green;
            /* margin: 20px; */
        }
        .child1{
            /* to combine cols */
            /* grid-column-start: 2; */
            /* grid-column-end: 4; */
            /* grid-column: 2/4; */
            /* grid-column: 1/span 3; */
        }
        .child4{
            /* to combine rows */
            /* grid-row-start: 1; */
            /* grid-row-end: 3; */
            /* grid-row: 1/4; */
            /* grid-row: 2/span 2; */
            /* grid-area:2/1/4/3; */
        }
     </style>
</head>
<body>
    <div class="parent">
       <div class="child1">
           <p>123</p>
       </div>
       <div class="child2">
           <p>345</p>
       </div>
       <div class="child3">
           <p>456</p>
       </div>
       <div class="child4">
           <p>567</p>
       </div>
       <div class="child5">
           <p>678</p>
       </div>
       <div class="child6">
           <p>789</p>
       </div>
       <div class="child7">
        <p>890</p>
    </div>
       <div class="child8">
        <p>901</p>
       </div>
    </div>
</body>
</html>