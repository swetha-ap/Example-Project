<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #first{
            float:left;
            width:300px;
            height:180px;
            background-color: rgb(35, 35, 64);
            /* overflow - visible,hidden,scroll,auto */
            overflow:auto;
            color: chartreuse;
            /* to make this div fixed even while scrolling down */
            position: fixed;
            /* to align fixed div to right */
            right:0;
        }
        img{
            margin-top: 400px;
            opacity: 0.5;
        }
        img:hover{
            opacity: 1;
        }
        table , td{
            border-bottom: solid 2px;
            border-color: black;
           
            border-collapse: collapse;
            padding: 30px; 
            margin: 30px;
         }
         table{
             /* to make table center */
             margin-left: auto;
             margin-right: auto;
             width: 100%;
         }
         tr:hover{
             /* color of row changes when mouse hovers over each row */
             background-color: brown;
         }
       #second{
           
           /* position: static; */
           position: relative;
           /* left: 50px; */
           /* bottom: 100px; */
           /* top:100px; */
           /* right:50px; */
           border:3px solid green;
           height:300px;
       }
       #three{
           border: 3px solid red;
           width: 150px;
           height:150px;
           position:absolute;
           /* nested div will move at top of page from 50px above */
           top:100px;
           left: 500px;
       }
       h2{
           /* shadow effect on text */
           text-shadow:2px 2px red;
           position: sticky;
           top:0;
           /* bottom:100; */
          margin-top: 300px;
       }
       #m1{
           /* gradient shading of background */
           background-image:linear-gradient(to bottom right, pink,grey);
           height:50px;
       }
       #m2{
           height:100px;
           /* gradient shading of background with 3 colors */
           background-image:linear-gradient(red,yellow,green);
       }
    </style>
</head>
<body>
    <!-- to make a content scroll, marquee tag used with direction attribute=up,down,right,left -->
    <marquee id="m1" direction="right">SCROLL EG</marquee>
    <!-- marquee behavior for scrolling and bouncing , need to set height of marquee -->
    <marquee id="m2" behavior="alternate" direction="up">SCROLL EXAMPLE Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, commodi.</marquee>
    <div id="first">
    <h1>FLOAT PROPERTY</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae. </p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, necessitatibus? Eveniet velit nulla totam ex maiores ducimus inventore officiis tempore.</p>
    </div>
    <br />
    <h2>EXAMPLE</h2>
    <br />
    <img src="../images/travel.jfif">
    <br /><br />
    <table>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
        </tr>
        <tr>
            <td>ABC</td>
            <td>10</td>
            <td>M</td>
        </tr>
        <tr>
            <td>XYZ</td>
            <td>30</td>
            <td>F</td>
        </tr>
        <tr>
            <td>HIJ</td>
            <td>20</td>
            <td>M</td>
        </tr>
    </table>
    <br /><br />
    <div id="second">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, eius? Earum, dolore! Ipsa magni qui rerum unde perferendis earum, quae, ex voluptates, consequatur error voluptatum. Deleniti ipsam eaque, possimus necessitatibus aperiam commodi! Assumenda, excepturi, quod laudantium debitis minima fugiat numquam earum, sit eaque sint autem optio quam non! Perspiciatis, quod!</p>
        <div id="three">
            <p> Quaerat ipsum, sit possimus debitis harum rerum nam animi voluptates! Quasi, sit. </p>
        </div>
    </div>
</body>
</html>