<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="p1"></p>
    <p id="p2"></p>

    <script>
        var students =["swetha","aiswarya","najla","sheena"]
        // document.getElementById("p1").innerHTML = students.toString();
        // document.getElementById("p1").innerHTML=students.join(" ")
        // document.getElementById("p1").innerHTML=students.join("*")
        // students.pop()
                    //  DISPLAYS REMOVED ELEMENT
        // document.getElementById("p1").innerHTML=students.pop()
                    // DISPLAYS ALL ELEMENTS EXCEPT REMOVED ONE
        // document.getElementById("p2").innerHTML=students
        // let length=students.push("sreya","SHEEBA")
                //    DISPLAY ARRAY WITH NEW ELEMENT
        // document.getElementById("p1").innerHTML=students
               //   DISPLAY LENGTH OF NEW ARRAY 
        // document.getElementById("p2").innerHTML=length
        // let a=students.shift()
              //    REMOVES FIRST ELEMENT OF ARRAY   
        // document.getElementById("p1").innerHTML=students
             //     DISPLAYS REMOVED FIRST ELEMENT  
        // document.getElementById("p2").innerHTML=a
        // let length= students.unshift("sheeba")
            //   ADDS NEW ELEMENT AT THE BEGINING
        // document.getElementById("p1").innerHTML=students
            //  DISPLAYS LENGTH OF NEW ARRAY
        // document.getElementById("p2").innerHTML=length
                // ADDS AN ELEMENT AT END OF ARRAY USING LENGTH 
        // students[students.length]="tanya"
        // document.getElementById("p1").innerHTML=students
                //    DELETES ELEMENT BUT LEAVES UNDEFINED SPACE
        // delete students[2]
        // document.getElementById("p1").innerHTML=students

                    // CONCAT TWO ARRAYS
        //  var fruits=["mango","apple","banana"]
        //  var vegs=["carrot","brinjal","cabbage"]
        //  var team=fruits.concat(vegs)
        //  document.getElementById("p1").innerHTML=team
                
                //  SPLICE METHOD TO INSERT AS WELL AS REMOVE ARRAY WITH INDEX NOS
        // students.splice(2,0,"tanya","linta")
        students.splice(1,2)
        document.getElementById("p1").innerHTML=students
    </script>
</body>
</html>