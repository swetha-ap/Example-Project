<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="">enter first no:</label>
    <input type="text" id="no1">
    <br /><br />
    <label for="">Select Operator:</label>
    <select name="operators" id="operators">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>
    <br /><br />
    <label for="">enter second no:</label>
    <input type="text" id="no2">
    <br /><br />
    <button type="button" onclick="operations()">SUBMIT</button>
    <br /><br />
    <p id="result">result is </p>
    <script>
        function operations(){
            var result
            switch(document.getElementById("operators").value){
                case '+':result= parseInt(document.getElementById("no1").value) + parseInt(document.getElementById("no2").value)
                          break
                case '-':result=parseInt(document.getElementById("no1").value) - parseInt(document.getElementById("no2").value)
                          break
                case '*':result=parseInt(document.getElementById("no1").value) * parseInt(document.getElementById("no2").value)
                          break
                case '/':result=parseInt(document.getElementById("no1").value) / parseInt(document.getElementById("no2").value)
                          break
                case '%':result=parseInt(document.getElementById("no1").value) % parseInt(document.getElementById("no2").value)
                          break
            }
            // document.getElementById("result").innerHTML += result
            if(result>50){
                document.getElementById("result").innerHTML += result
                document.getElementById("result").style.color="green"
            }else if(result<50 && result>=0){
            document.getElementById("result").innerHTML += result
            }
            else if(result<0){
                document.getElementById("result").innerHTML += result
                document.getElementById("result").style.color="red"
            }
        }
    </script>
</body>
</html>