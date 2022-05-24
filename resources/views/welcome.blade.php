<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1,
        p {
            color: rgb(104, 92, 94);
            background-color: rgb(26, 218, 26);
            /* padding-top: 5px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 15px; */
            /* padding: 18px 10px 10px 20px; */
            /* padding: 50px 30px 20px; */
            padding: 20px 30px;
            /* border: solid 2px white; */
            /* border-width: 5px;*/
            border-style: dashed dotted inset outset;
            border-color: darkred blue deeppink greenyellow;
            /* border: 3px dotted darkred; */
            border-width: 2px 5px 6px 4px;
            /* border-bottom-style: dotted; */
            border-radius: 25px;
            /* margin-top: 20px;
            margin-bottom: 35px;
            margin-left: 30px;
            margin-right: 40px; */
            /* margin: 15px 10px 20px 25px; */
            margin: auto;
        }

        /* .s1{
            color:firebrick;
            background-color: aqua;

        } */
        p.s1 {
            color: green;
            background-color: rgb(200, 166, 232);
        }

        /* #n1{
            color: indigo;
            background-color: darkslategrey;
        }

        #n2{
            color: blue;
            background-color: blanchedalmond;
        } */
    </style>
</head>

<body>
    <h1 class="s1">hello world</h1>
    <h1 class="s1">SWETHA</h1>
    <h1 class="s1">WELCOME</h1>
    <p class="s1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <br />
    <h2 id="n1">Example</h2>
    <p id="n2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia ullam distinctio dolorum tempora!
        Veritatis repudiandae facere quasi tempora delectus repellendus, magni magnam neque sunt molestiae totam,
        impedit, atque quas quisquam.</p>
    <img src="images/flower.jpg" alt="">
    <br /><br />
    <h1 style="color:blueviolet; background-color:brown;">GIT EXAMPLE</h1>
    @yield('content')
    <a href="{{ route ('link1') }}">click1</a>
    <br /><br />
    <a href="{{ route ('link2') }}">click2</a>
    <br /> <br />
    <h2 class="s1">EG</h2>
    <p class="s1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p class="s1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi.</p>
    <p class="s1">Lorem ipsum dolor sit amet.</p>
    <div>
        <h2>hey</h2>
        <h2>good afternoon</h2>
        <p>Lorem ipsum dolor sit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, eaque! Lorem ipsum
            dolor sit amet consectetur, adipisicing elit. Atque sapiente alias repellendus dicta libero sequi optio sunt
            assumenda omnis! Similique saepe eos nemo illum placeat rem modi omnis neque at.</amet>
        </p>
    </div>
    <p>Lorem ipsum dolor sit <span>lorem</span>amet consectetur adipisicing.</p>
    <label for="name">name</label>
    <input type="text">

</body>

</html>