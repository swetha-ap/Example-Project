<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="" id="text1" placeholder="enter todo">
    <br /><br />
    <button type="submit" id="submit" onclick="todo()">SUBMIT</button>
    <br /><br />
    <button type="reset" id="reset" onclick="clears()" >CLEAR</button>
    <br /><br />
    <ul id="list">

    </ul>
    <script>
          function todo(){
            // to make todo as a list
              document.getElementById("list").innerHTML +="<li>"+ document.getElementById("text1").value+"</li>"
          }
          function clears(){
            document.getElementById("list").innerHTML= ""
          }


    </script>
</body>
</html>