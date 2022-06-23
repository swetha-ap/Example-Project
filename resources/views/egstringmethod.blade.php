<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p id="eg1"></p>
    <input type="text" name="" id="t1" placeholder="enter text">
    <button onclick="countfn()">COUNT</button>
    <button onclick="countspl()">SPECIAL</button>
    <button onclick="upperfn()">UPPER</button>
    <br /><br />
    <input type="text" name="" id="t4" placeholder="enter text">
    <input type="text" name="" id="t2" placeholder="enter word to replace">
    <input type="text" name="" id="t3" placeholder="enter replacement">
    <button onclick="replacefn()">REPLACE</button>
    <p id="eg2"></p>
    <script>
        count = 0
        count1 = 0
        // FIND NO OF WORDS

        function countfn() {
            var t1 = document.getElementById("t1").value
            var text_arr = t1.split(" ")
            // console.log(text_arr)
            for (let i = 0; i < text_arr.length; i++) {
                count += 1
            }
            console.log(count)
            document.getElementById("eg1").innerHTML = count
        }

        //  FIND SPECIAL CHARACTER

        function countspl() {
            var t1 = document.getElementById("t1").value
            var spltext = "!#$%&'()*+,-./:;<=>?@[]^_`{|}"
            var spt = spltext.split("")
            // console.log(spt)
            var text_arr = t1.split("")
            // console.log(text_arr)
            for (let i = 0; i < text_arr.length; i++) {
                for (let j = 0; j < spltext.length; j++) {
                    if (text_arr[i] == spltext[j]) {
                        count1 += 1
                    }
                }
            }
            // console.log(count1)
            document.getElementById("eg1").innerHTML = count1
        }


        //    UPPER CASE FOR EACH WORD


        function upperfn() {
            var t1 = document.getElementById("t1").value
            var text_arr = t1.split(" ")
            for (let i = 0; i < text_arr.length; i++) {
                text_arr[i] = text_arr[i].charAt(0).toUpperCase() + text_arr[i].slice(1)
            }
            // console.log(text_arr)
            // join converts array to string without commas
            document.getElementById("eg1").innerHTML = text_arr.join(" ")
        }


        //   REPLACE WORDS

        function replacefn() {
            var t4 = document.getElementById("t4").value
            var t2 = document.getElementById("t2").value
            var t3 = document.getElementById("t3").value
            var text_arr = t4.split(" ")
            var t2_arr = t2.split(" ")
            var t3_arr = t3.split(" ")

            for (let i = 0; i < text_arr.length; i++) {
                if (text_arr[i] == t2) {
                    text_arr[i] = text_arr[i].replace(t2, t3)
                }
                // console.log(text_arr)
            }
              // join converts array to string without commas
            document.getElementById("eg2").innerHTML = text_arr.join(" ")
        }

    </script>
</body>

</html>