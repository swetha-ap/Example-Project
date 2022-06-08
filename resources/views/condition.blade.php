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
         // conditional stmt
        //  var age=parseInt(prompt("enter age"))
        //  var state=prompt("enter state")
        //     if(age>=18 && state=="kerala"){
        //         console.log("you are eligible to vote")
        //     }
        //     else{
        //         console.log("not eligible")
        //     }
        //     console.log("finished")

            // eg of else if
            // var day=parseInt(prompt("enter day number"))
            // if(day==0){
            //     console.log("Sunday")
            // }
            // else if(day==1){
            //     console.log("Monday")
            // }
            // else if(day==2){
            //     console.log("Tuesday")
            // }
            // else if(day==3){
            //     console.log("Wednesday")
            // }
            // else if(day==4){
            //     console.log("Thursday")
            // }
            // else if(day==5){
            //     console.log("Friday")
            // }
            // else if(day==6){
            //     console.log("Saturday")
            // }
            // else{
            //     console.log("Invalid Day Number")
            // }

            // eg3
            // var num1=parseInt(prompt("enter a number"))
            // if(num1%2==0){
            //     console.log("Even Number")
            // }
            // else{
            //     console.log("Odd number")
            // }

                    // eg4 Switch
            //  var day=parseInt(prompt("enter day no:"))
            //  switch(day){
            //      case 0 : console.log("Sunday")
            //               break;
            //      case 1 : console.log("Monday")
            //               break;
            //      case 2 : console.log("Tuesday")
            //               break
            //      case 3 : console.log("Wednesday")
            //               break;
            //      case 4 : console.log("Thursday")
            //               break;
            //      case 5 : console.log("Friday")
            //               break;
            //      case 6 : console.log("Saturday")
            //               break;
            //      default : console.log("Invalid day no!!!")
            //  }

                //   operations on numbers using switch and else if
            var num1=parseInt(prompt("enter num1"))
            var num2=parseInt(prompt("enter num2"))
            var op=prompt("enter operator")
             // switch(op){
            //     case '+': console.log(num1+num2)
            //               break;
            //     case '-': console.log(num1-num2)
            //               break;
            //     case '*': console.log(num1*num2)
            //               break;
            //     case '/': console.log(num1/num2)
            //               break;
            //     default : console.log("invalid operator")
            // }
            if(op =='+'){
                console.log(num1+num2)
            }
            else if(op == '-'){
                console.log(num1-num2)
            }
            else if(op == '*'){
                console.log(num1*num2)
            }
            else if(op == '/'){
                console.log(num1/num2)
            }
            else{
                console.log("invalid operator")
            }
    </script>
</body>
</html>