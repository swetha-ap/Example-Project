<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <label>Enter Fruit:</label>
    <input type="text" id="text1">
    <br /><br />
    <button id="remove" onclick="remove()">REMOVE</button>
    <ul id="list1">

    </ul>
    <script>
       function remove(){
       var fruits=["apple","orange","banana"]
       var frut=document.getElementById("text1").value
       var flag=0
       for(let i=0;i<fruits.length;i++){
        if(fruits[i]==frut){
          // to delete selected fruit without leaving a hole in the array
            fruits.splice(i,1);
            flag=1
            break
        }
       }
        if(flag==1){
        for(let i=0;i<fruits.length;i++){

             document.getElementById("list1").innerHTML += "<li>" + fruits[i] + "</li>"
         }
      }
        else{
            alert("INVALID FRUIT!!!")
        }
    }



    </script>
</body>
</html>