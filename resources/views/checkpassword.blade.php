<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>Enter Password:</label>
    <input type="password" name="" id="pswd">
    <br /><br />
    <button id="b1" onclick="validation()">Check</button>
    <p id="p1"></p>
    <script>
          function validation(){
            var arr1=['@','!','#']
            var flag=0
            var pswd=document.getElementById("pswd").value
            if(pswd.length>5){
                // to check whether array of spl char matches with password
                for (let i=0;i<arr1.length;i++){
                     for(let j=0;j<pswd.length;j++){
                        if(arr1[i]==pswd[j]){
                            flag=1
                            break
                        }
                     }
                }
                if(flag==1){
                    document.getElementById("p1").innerHTML="strong"
                    document.getElementById("p1").style.color="green"
                }else if(flag==0){
                    document.getElementById("p1").innerHTML="weak"
                    document.getElementById("p1").style.color="red"
                }

            }
            else{
                document.getElementById("p1").innerHTML="Require Minimum 5 characters"
            }
          }


    </script>
</body>
</html>