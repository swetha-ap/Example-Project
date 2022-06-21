<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            border-style: none;
            background-color: white;
            text-align: center;
            width: 100%;
        }
        table{
            border-collapse: collapse;
        }
        input{
            border-style: none;
            text-align: right;
        }
    </style>
</head>
<body>
    <table border="2">
        <tr>
            <td  colspan="4"><input id="disp" type="text" readonly></td>
        </tr>
        <tr>
            <td ><button onclick="operations('+')">+</button></td>
            <td ><button onclick="operations('-')">-</button></td>
            <td ><button onclick="operations('*')">*</button></td>
            <td ><button onclick="operations('/')">/</button></td>
        </tr>
        <tr>
            <td><button onclick="setnumbers('7')">7</button></td>
            <td><button onclick="setnumbers('8')">8</button></td>
            <td><button onclick="setnumbers('9')">9</button></td>
            <td style="padding: 5px;" rowspan="4"><button onclick="calculations()">=</button></td>
        </tr>
        <tr>
            <td><button onclick="setnumbers('4')">4</button></td>
            <td><button onclick="setnumbers('5')">5</button></td>
            <td><button onclick="setnumbers('6')">6</button></td>
        </tr>
        <tr>
            <td><button onclick="setnumbers('1')">1</button></td>
            <td><button onclick="setnumbers('2')">2</button></td>
            <td><button onclick="setnumbers('3')">3</button></td>
        </tr>
        <tr>
            <td><button onclick="setnumbers('0')">0</button></td>
            <td><button id="myBtn" onclick="setdecimal('.')">.</button></td>
            <td><button onclick="clearnum()">C</button></td>
        </tr>
    </table>
    <script>
        // count=0
        //  function setdecimal(num1){
        //     val= document.getElementById('disp').value
        //     // console.log(val.length)
        //     val_len=val.length
        //     if(val[val_len-1]!='.'){
        //         document.getElementById('disp').value+=num1
        //     }
        //  }
         function setdecimal(num1){
            document.getElementById('disp').value
            count+=1
            if(count>1){
                document.getElementById("myBtn").disabled=true
            }
            else{
           
                document.getElementById('disp').value+=num1
            }
         }
        function setnumbers(num){
             document.getElementById('disp').value+=num

        }
        function clearnum(){
            document.getElementById('disp').value=""
        }
        function operations(op){
            // count=0
            // document.getElementById("myBtn").disabled=false
            curop=op
            temp_value=Number(document.getElementById('disp').value)
            // console.log(curop)
            // console.log(temp_value)
            document.getElementById('disp').value=""
            // document.getElementById('disp').value=

        }
        function calculations(){
            curr_value=Number(document.getElementById('disp').value)
            if(curop=='+'){
                result=temp_value+curr_value
            }
            else if(curop=='-'){
                result=temp_value-curr_value
            }
            else if(curop=='*'){
                result=temp_value*curr_value
            }
            else if(curop=='/'){
                result=temp_value/curr_value
            }
            document.getElementById('disp').value=temp_value+curop+curr_value+'='+result

            // result 
            // document.getElementById('disp').value=result
        }
    </script>
</body>
</html>