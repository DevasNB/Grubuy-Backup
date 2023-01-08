<?php
include 'getlogin.php';
include './loginscript/dbaccess.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_SESSION["user_Name"])) {
    echo '';
} else {
    header("location: ../login.php?error=startyoursession");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Grubuy - Product Page</title>

    <link rel="shortcut icon" type="image/x-icon" href="/imagens/grubuy5.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="color-background2">
    <?php
    include 'header.php';
    ?>

    <?php

    class editmyproduct extends Database
    {
        public function pickProduct($productID)
        {
            $stmt = $this->connect()->prepare('SELECT * FROM products WHERE productID = ?;');
            $stmt->execute(array($productID));

            $eproducts = $stmt->fetch(PDO::FETCH_ASSOC);

            return $eproducts;
        }
    }

    $myproduct = new editmyproduct();

    $productID = isset($_POST['productID']) ? $_POST['productID'] : '';
    $product_edit = $myproduct->pickProduct($productID);
    

    class userproduct extends Database
    {
        public function pickUser($userID)
        {
            $stmt = $this->connect()->prepare('SELECT userName FROM users WHERE userID = ?;');
            $stmt->execute(array($userID));

            $euser = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $euser;
        }
    }

    $creator = new userproduct();

    $userID = $product_edit["productCreator"];
    $username = $creator->pickUser($userID);
    
    echo '
    <section class="py-5">
        <div class="container product style-border3 my-5">
            <form action="./cartscript/getcart.php" method="POST">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <img class="card-img-top card-image-size2 style-border5 ms-1 mt-3 mb-3" src="./uploads/products/' . $product_edit['productImage'] . '" alt="..." />
                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-1">Seller: <a href="#">' . $username["userName"] . '</a></h4>
                        <h1 class="display-5 fw-bolder">' . $product_edit["productName"] . '</h1>
                        <div class="fs-5 mb-5">
                            <!--<span class="text-decoration-line-through">$45.00</span>-->
                            <span>' . $product_edit["productPrice"] . ' €</span>
                        </div>
                        <p class="lead">' . $product_edit["productDescription"] . '</p>
                        <div class="d-flex">
                            <input name="productID" type="hidden" value="' . $productID. '" readonly/>
                            <input name="productPrice" type="hidden" value="' . $product_edit["productPrice"] . '" readonly/>
                            <input class="form-control text-center me-3" name="productQuantity" type="num" value="1" max="'. $product_edit["productQuantity"] .'" style="max-width: 3rem" />
                                
                            <button class="btn btn-warning me-3" name="submit" type="submit">Add to Cart</button>
                            <a href="./products.php" class="btn btn-danger">Go Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>';

    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>