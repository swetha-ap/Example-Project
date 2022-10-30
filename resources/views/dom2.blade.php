<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- <p class="class1">hello</p>
   <p class="class1">namaste</p>
   <h1 class="class1">good</h1>
   <h1 class="class1">great</h1> -->
   <input id="text1" type="text" placeholder="enter no 1">
   <input id="text2" type="text" placeholder="enter no 2">
   <button type="button" onclick="add()">ADD</button>
   <p id="text3" >Result is</p>
   <!-- <input type="text" id="result"> -->
   <script>
    //   var class1=document.getElementsByClassName("class1")
    //   to call a tag in class by index number
    //   console.log(class1[2])
    function add(){
        var sum= parseInt(document.getElementById("text1").value) + parseInt(document.getElementById("text2").value)
        console.log(sum)
        // document.getElementById("result").value= sum
        document.getElementById("text3").innerHTML += sum
    }
   </script>
</body>
</html>