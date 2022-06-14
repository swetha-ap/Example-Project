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
        //    DO-WHILE LOOP
        //    var i=0
        //    do{
        //     console.log(i)
        //     i++
        //    }
        //    while(i<5)

        //  NESTED FOR LOOP
        //  var i , j 
        //  for(i=0;i<5;i++){
        //     for(j=1;j<5;j++){
        //         console.log(i,j)
        //     }
        //  }


        // var i=1000
        // for(let i=0;i<10;i++){
        //     console.log(i)
        // }
        // console.log(i)

        //  TOP SCORE AMONG STUDENTS
        // var marks=[20,30,50,49,35,10,38,60]
        // var top_score=0 
        // var length=marks.length
        // for(let i=0;i<length;i++){
        //     if(marks[i]>top_score){
        //         top_score=marks[i]
        //     }
        // }
        // console.log("top score is " + top_score)

        // FIND INPUT NO IN ARRAY
        // var array2=[21,34,25,40,56,70]
        // var flag=0
        // var input_no= parseInt(prompt("enter a number"))
        // var length=array2.length
        // for(let i=0;i<length;i++){
        //     if(input_no==array2[i]){
        //      flag=1
        // break
        //     }
        //  }
        //  if(flag==1){
        //  console.log("input_no found ")
        //  }
        //  else{
        //     console.log("input_no is not found")
        //  }

        //  BREAK CONTROL STMT
        // for(let i=0;i<10;i++){
        //     if(i==3){
        //         break
        //     }
        //     console.log(i)
        // }

        //    CONTINUE CONTROL STMT
        // for(let i=0;i<10;i++){
        //     if(i==3){
        //         continue
        //     }
        //     console.log(i)
        // }

        //   SECOND GREATEST NO IN ARRAY
        // var marks=[43,30,69,90,88,100,120]
        // var top_score=0 
        // var second_great=0
        // var length=marks.length
        // for(let i=0;i<length;i++){
        //    if(marks[i]>top_score){
        //     top_score=marks[i]
        //    }
        // }
        // for(let i=0;i<length;i++){
        //   if(marks[i]!=top_score){
        //     if(marks[i]>second_great){
        //         second_great=marks[i]
        //     }
        //   }
        // }
        // console.log("sg is " + second_great)

        //  ASCENDING ORDER
        // var arr1=[45,87,20,64,5,21]    
        // var temp=0
        // var length=arr1.length
        // for(let i=0;i<length;i++){
        //     for(let j=i+1;j<length;j++){
        //      if(arr1[i]>arr1[j]){
        //        temp=arr1[i]
        //        arr1[i]=arr1[j]
        //        arr1[j]=temp
        //      }
        //     }
        //    }
        // console.log(arr1)

        //    DESCENDING ORDER
        // var arr1 = [43, 9, 4, 72, 63, 90]
        // var temp = 0
        // var length = arr1.length
        // for (let i = 0; i < length; i++) {
        //     for (let j = i + 1; j < length; j++) {
        //         if (arr1[i] < arr1[j]) {
        //             temp = arr1[i]
        //             arr1[i] = arr1[j]
        //             arr1[j] = temp
        //         }
        //     }
        // }
        // console.log(arr1)

        //  ELEMENT FOUND WITH POSITION

        // var array2 = [21, 34, 25, 40, 56, 70]
        // var flag = 0
        // var input_no = parseInt(prompt("enter a number"))
        // var length = array2.length
        // for (var i = 0; i < length; i++) {
        //     if (input_no == array2[i]) {
        //         flag = 1
        //         break
        //     }
        // }
        // if (flag == 1) {
        //     console.log("input_no found at position " + i)
        // }
        // else {
        //     console.log("input_no is not found")
        // }

        // COUNT OF ELEMENTS IN AN ARRAY
        // var arr1=[21,10,20,30,30,21,90,21,21]
        // var num=parseInt(prompt("enter number"))
        // var count=0
        // var length=arr1.length
        // for(var i=0;i<length;i++){
        //     if(num==arr1[i]){
        //         count+=1
        //     }
        // }
        // console.log("the count of input number " + num + " is " + count)

        // COMMON ELEMENTS IN SEPERATE ARRAY
        var arr1=[1,2,3,4]
        var arr2=[2,3]
    
        var temp=0
        var length=arr1.length
        var length2=arr2.length
        for(var i=0;i<length;i++){
            for(var j=0;j<length2;j++){
                if(arr1[i]==arr2[j]){
                    temp=arr1[i]
                    
                }
            }
        }
        console.log(temp)
    </script>
</body>

</html>