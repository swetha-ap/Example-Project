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
        // var i; i
                //    INCREMENT
        // for(i=0;i<=10;i++){
        //     console.log(i)
        // }

         //    DECREMENT
        // for(i=10;i>=0;i--){
        //     console.log(i)
        // }
                    
                // Even
        // for(i=1;i<=100;i++){
           
        //    if(i%2==0){
        //        console.log(i)
        //    }
        //    else{
        //        console.log("0")
        //    }
        // }

        //   digit addition of a number
        var num=parseInt(prompt("enter 3 digit no"))
        var sum=0
        var rem
        // while(num>0){
        //     rem=num%10
        //     sum=sum+rem
        //     num=parseInt(num/10)
        // }
        // console.log(sum)
        for(num;num>0;num=parseInt(num/10)){
            rem=num%10
            sum=sum+rem
        }
        console.log(sum)
        //    WHILE LOOP
        // var i=0
        // while(i<=10){
        //     console.log(i)
        //     i++
        // }

        //   FOR-OF LOOP FOR ARRAY
        // var arr1=[1,2,3,4]
        // for(var i of arr1){
        //     console.log(i)
        // }

        //  FOR-IN LOOP FOR OBJECT
            var obj={name:'abc',age:10,gender:'f'}
            for(var i in obj){
                console.log(i +' is ' + obj[i])
            }
    </script>
</body>
</html>