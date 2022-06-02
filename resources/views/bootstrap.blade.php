<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDN link with bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
</head>
<body>
    <h1>BOOTSTRAP EXAMPLE</h1>
    <!-- button class predefined in bootstrap -->
    <button type="button" class="btn btn-primary">Primary</button>
    <!-- container class sets margin of page -->
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ducimus velit quae earum est architecto, fugiat quo tempore explicabo, ratione aliquid possimus ipsam dolorem laudantium nam soluta adipisci. Placeat, cum?</p>
    </div>
    <!-- container fluid uses 100%screen size -->
    <div class="container-fluid">
        <!-- to set a border around image -->
        <img src="{{ asset ('images/flower.jpg') }}" class="img-thumbnail  ">
        <!-- to set image in center -->
        <img src="{{ asset ('images/flower.jpg') }}" class="rounded mx-auto d-block">
        <!-- to set image at right -->
        <img src="{{ asset ('images/flower.jpg') }}" class=" rounded float-right">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, blanditiis maiores molestias earum tenetur modi mollitia. Tempore, eaque inventore! Aliquam molestiae maiores dolores veritatis dignissimos nihil quos, ab nemo doloribus.</p>
       <div class="row">
           <div class="col-5">
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis iure sint dolore dicta officiis odio ullam libero quisquam non! Amet unde quaerat fuga deleniti vero blanditiis debitis cumque enim optio.</p>
           </div>
           <!-- making a column empty -->
           <div class="col-1"></div>
           <div class="col-3">
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur distinctio deleniti iure nostrum commodi voluptates hic voluptatum! Rerum aut debitis est cum veniam necessitatibus magnam ex laboriosam quas? Exercitationem, nisi?</p>
           </div>
           <div class="col-3">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, reprehenderit.</p>
           </div>
       </div>
       <!-- next row -->
        <div class="row">
            <div class="col-1">
                <img src="{{ asset ('images/flower.jpg') }}" class="img-fluid">
            </div>
            <!-- changing col size acc to screen size of med sm xs -->
            <div class="col-md-4 col-sm-2 col-6">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam provident magni perferendis iusto, reprehenderit voluptatum, autem possimus at vitae molestias perspiciatis mollitia consectetur eaque blanditiis maiores reiciendis obcaecati, ex repudiandae.</p>
            </div>
            <div class="col-md-4 col-sm-2 col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem illo nobis ad deleniti provident ex at pariatur ab minima eligendi. Sunt voluptatum quaerat facilis incidunt iusto quis dolorum eum harum!</p>
            </div>
           
        </div>
    
    </div>
</body>
</html>