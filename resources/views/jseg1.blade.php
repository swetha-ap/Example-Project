<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>JS EXAMPLE</h1>
    <form name="fm1">
        <!-- Inline js function -->
        <input type="button" value="click" onclick="alert('EXAMPLE')">
        <br /><br />
          <input type="button" value="click here" onclick="message()">
    </form>
    <!-- External Call of JS from jseg folder in public -->
    <script type="text/javascript" src="{{ asset ('js/jseg.js') }}"></script>
    <!-- Internal js function -->
    <script type="text/javascript">
        // Immediate function
        document.write("<h1>hello</h1>");
    </script>
</body>
</html>