<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="1">hello</h1>
    <button type="submit" onclick="click_change()">submit</button>
    <br /><br />
    <button type="submit" ondblclick="alert('DOUBLE CLICK!!')">submit2</button>
    <br /><br />
    <input type="text" id="text1">
    <script>
        console.log(document)
        var h=document.getElementById("1").innerHTML 
        console.log(h)
        function click_change(){
            // document.getElementById("1").innerHTML="content changed on click"
            var text1 = document.getElementById("text1").value
            // to get the text , written in textbox when submit is clicked, as main heading
            document.getElementById("1").innerHTML=text1
            // change color of font of displayed text
            document.getElementById("1").style.color="blue"
            console.log(text1)
        }
        
    </script>
</body>
</html>