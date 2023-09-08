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
    .form {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8)50%, rgba(0, 0, 0, 0.8)50%);
        transform: translate(0%, -5%);
        border-radius: 10px;
        padding: 25px;
    }

    .form input {
        background: transparent;
        border-bottom: 1px solid #ff7200;
        border-top: none;
        border-right: none;
        border-left: none;
        color: #fff;
        font-size: 15px;
        letter-spacing: 1px;
        font-family: sans-serif;
    }
    h2 {
            font-family: sans-serif;
            text-align: center;
            color: #ff7200;
            font-size: 22px;
            background-color: #fff;
            border-radius: 10px;
            margin: 2px;
            padding: 8px;
        }
</style>

<body class="main">
    <div>
        <?php
        include "navigationbar.php"
        ?>
    </div>
    <div class="container pt-5">
        <div class="row display-flex">
            <div class="col col-lg-6">
                <form action="bookedinformation.php">
                <div class="form">
                    <h2>Please Enter Your Details Here to Book</h2> <br><br>
                    <input class="form-control" type="text" placeholder="First Name"><br><br>
                    <input class="form-control" type="text" placeholder="Last Name"><br><br>
                    <input class="form-control" type="text" placeholder="Email"><br><br>
                    <input class="form-control" type="text" placeholder="Phone Number"><br><br>
                    <button class="button btn btn-block col-12">Book</button>
                </div>
                </form>
            </div>
            <div class="col col-6">
               <img src="./images/2.jpg" alt="">

            </div>
        </div>

    </div>
    <div>
        <?php
        include "footer.php"
        ?>
    </div>

</body>
<script src=."/jquery/scripts.js"></script>

</html>