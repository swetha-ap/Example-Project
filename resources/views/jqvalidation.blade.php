<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <style>
    form .error {
            color: #ff0000;
    }
    form button {
  height: 30px;
  line-height: 30px;
  background: #7247e9;
  color:beige;
  text-transform: uppercase;
  font-weight: bold;
  margin-top: 1.5rem;
  cursor: pointer;
}
    </style>
</head>

<body>
    <form action="" id="person">
        <input type="text" name="firstname" id=""><br>
        <input type="text" name="lastname" id=""><br>
        <input type="text" name="email" id=""><br>
        <input type="text" name="password" id=""><br>
        <button>submit</button>
        <!-- <input type="submit" value=""> -->
    </form>
    <script>
        jQuery.validator.addMethod("lettersonly", function(value, element) {
               return this.optional(element) || /^[a-z]+$/i.test(value);
               }); 
        $().ready(function () {
            $("button").click(function () {
                $("#person").validate({
                    rules: {
                        firstname: {
                            required: true,
                            minlength: 3,
                            lettersonly: true 
                        },
                        lastname: {
                            required: true,
                            minlength: 1,
                            lettersonly: true 
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true,
                            minlength: 6
                        }
                    },
                        messages:{
                        firstname: {
                            required: "enter first name",
                            minlength: "enter mnm 3 char",
                            lettersonly:"only alphabets allowed"
                        },
                        lastname: {
                            required: "enter last name",
                            minlength: "enter mnm of 1 char"
                        },
                        email: "enter valid email",
                        password: {
                            required: "enter password",
                            minlength: "password must be mnm of 6 char"
                        }
                    }
                })
            })
        })
    </script>
</body>

</html>