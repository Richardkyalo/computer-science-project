<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    
</style>
<body class="main">
    <?php
    include "navigationbar.php"
    ?>
    <div class="row minor">
        <div class="col col-12" style="color: #fff;">
            <h1 style="font-family: 'Times New Roman';">We bring you<br><span style="color: #ff7200;">Happines and Enjoyment </span> <br>Every day <br> <span style="color: #ff7200;">at Any Time you Want</span></h1>
            <p class="" style="font-family: Arial;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque
                expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus
                <br> a quae totam ipsa illum minus laudantium?
            </p>

            <a href="#" class="btn btn-block button">Welcome</a>
        </div>
    </div>
    <div class="row">
        <div class="col col-12">
            <h2 style="color: #ff7200;">Movies</h2>
        </div>
    </div>
    <div class="row">
            <?php
           
            for ($i =0; $i < 10; $i++) {
                include "card.php";
            }
               
            ?>
    </div>

     <div class="row">
     <div class="col col-12">
     <?php
    include "footer.php"
    ?>
        </div>
     </div>

</body>
<script src="./js/bootstrap.bundle.js"></script>

</html>