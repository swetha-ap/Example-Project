<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
         var num1=parseInt(prompt("enter num1"))
         var num2=parseInt(prompt("enter num2"))
         var num3=parseInt(prompt("enter num3"))
         var num4=parseInt(prompt("enter num4"))
         var largenum
        //  if(num1>num2){
        //      largenum=num1
        //  }
        //  else{
        //      largenum=num2
        //  }
        //  console.log(largenum +' is largest')

            //  nested-if
            // if(num1>num2){
            //     if(num1>num3)
            //     {
            //         largenum=num1
            //     }
            //     else{
            //         largenum=num3
            //     }
            // }
            // else if(num2>num1)
            // {
            //     if(num2>num3){
            //         largenum=num2
            //     } 
            //     else{
            //         largenum=num3
            //     }
            // }
            // else if(num3>num1){
            //     if(num3>num2){
            //     largenum=num3
            // }
            //     else{
            //         largenum=num2
            //     }
            // }      
           
            // console.log(largenum + 'is largest')     

            //  nested-if for GREATER THAN 4 NOS
            if(num1>num2){
                if(num1>num3){
                    if(num1>num4){
                        largenum=num1
                    }
                    else if(num3>num4){
                        largenum=num3
                    }
                    else{
                        largenum=num4
                    }
                }
               
            } else if(num2>num3){
                    if(num2>num4){
                        largenum=num2
                    }
                    else{
                        largenum=num4
                    }
                }
                else if(num3>num4){
                    largenum=num3
                }
                else{
                    largenum=num4
                }
            console.log(largenum + ' is largest')
    </script>
</body>
</html>