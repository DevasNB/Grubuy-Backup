<!doctype html>

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Grubuy - Home</title>

	<link rel="shortcut icon" type="image/x-icon" href="/imagens/grubuy5.png"/>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body class="color-background2">

    <?php
    include 'header.php';
    ?>
    <section id="start-message">
        <div class="container">
            <div class="card style-border text-white text-center m-5">
                <div class="card-body p-md-3">
                    <div class="row justify-content-center">
                        <h1 class="mytext-h1 m-2 p-2">Welcome 
                                <?php
                                if(isset($_SESSION["user_Name"])) {
                                    echo '<span class="text-warning">$_SESSION["userName"]</span></h1>
                                    <p class="text-black">Now you have the account started, you can indicate your purchases</p>';
                                }
                                else {
                                    echo 'to <span class="text-warning">Grubuy</span></h1>
                                    <p class="text-black">Log in or create your session to start shopping</p>';
                                }
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!--<script src="js/login-animation.js"></script>-->
</body>
<html>

<!--
{
    //"name": "DRENA",
    //host": "drena.pt",
    //"protocol": "sftp",
    //"port": 22,
    //"username": "grubuy",
    //"remotePath": "/home/grubuy/www/cabanao",
    //"uploadOnSave": true
}-->
