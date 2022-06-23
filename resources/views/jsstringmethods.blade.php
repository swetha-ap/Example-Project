<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="demo"></p>
    <p id="d1"></p>
    <p id="d2"></p>
    <p id="d3"></p>
    <p id="d4"></p>
    <p id="d5"></p>
    <p id="d6"></p>
<script>
    //  let str = "Apple,Banana,Kiwi";
    //  var text1="my name is swetha "
    // var text1="my name is swetha swetha"
    // var text1="my name is Swetha swetha "
    var wish="how are you"
//  to replace a content using replace. Case sensitive , replace first match
    //  var newtext=text1.replace("swetha","sreya")
// to replace multiple occurence of same word we make use of g - global
    // var newtext=text1.replace(/swetha/g,"sreya")
// to make case insensitive we use i 
    // var newtext=text1.replace(/swetha/ig,"sreya")
// to get a particular content using index no using slice
    //  var result=str.slice(6,12)
 //  to get end of string by removing remaining string content
    //  var result1=str.slice(-4)
    //  var result2=str.substring(13,17)
    //  var result3=str.substr(0,5)
    //  var result4=str.substr(-4)
    //  var upperwish=wish.toUpperCase()
    // let text1 = "Hello";
    // let text2 = "World";
    // let text3 = text1.concat(" ", text2);
    // let text1 = "      Hello World!      ";
// to remove space from text at both ends
    // let text2 = text1.trim();
    // var text="hello"
    var numb = 12345;
    // to convert number to string and then pad
    let text = numb.toString();
    // let padded = text.padStart(13,"0");
    let padded = text.padEnd(13,"0");
    // var charwish=wish.charAt(5)
    // var charwish=wish.charCodeAt(5)
    // var st1=wish[20]
    var t1="hello world"
// to convert string to array
    var text_arr=t1.split(" ")
    console.log(text_arr)
    // var ptext=text.padStart(8,"*")
    // var ptext=text.padEnd(8,"*")
    // document.getElementById("demo").innerHTML = result
    // document.getElementById("d1").innerHTML = result1
    // document.getElementById("d2").innerHTML = result2
    // document.getElementById("d3").innerHTML = result3
    // document.getElementById("d4").innerHTML = result4
    // document.getElementById("d5").innerHTML = newtext
    // document.getElementById("d6").innerHTML = upperwish
    // document.getElementById("d6").innerHTML = text3
    // document.getElementById("d6").innerHTML = text2
    // document.getElementById("d6").innerHTML = ptext
    // document.getElementById("d6").innerHTML =padded
    // document.getElementById("d6").innerHTML =charwish
    // document.getElementById("d6").innerHTML =st1 
    document.getElementById("d6").innerHTML = text_arr
</script>
</body>
</html>