<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST["submit"])) {

    //data
    $product_name = $_POST["productname"];
    $product_description = $_POST["productdescription"];
    $product_price = $_POST["productprice"];
    $product_quantity = $_POST["productquantity"];
    $product_image = $_FILES['productimage'];
    $product_id = $_POST['productID'];

    //image upload
    // Destinaiton path
    // Concatenating uploaded file name with destination path
    $destination_path = "/home/grubuy/www/cabanao/uploads/products/" . $product_image['name'];

    if (is_uploaded_file($product_image['tmp_name'])) {
        if (!move_uploaded_file($product_image['tmp_name'], $destination_path)) {
            header("location: ../myproducts.php?error=imagenotsent");
            exit();
        }
    } else {
        header("location: ../myproducts.php?error=fail_to_upload_image");
        exit();
    }


    //Instances LoginControlers
    include "../loginscript/dbaccess.php";
    include "../edit_delete_productscript/changeproduct.functions.php";
    include "../edit_delete_productscript/changeproduct.functions.controlers.php";

    //Other variables - like date and creator

    $editproducts = new EditProductsControlers($product_name, $product_description, $user_creator, $product_image['name'], $product_quantity, $product_price, $product_id);

    //running errors and handlers
    $editproducts->EditProducts();

    //Going to back to front page
    header("location: ../myproducts.php?error=productedited");
}
?>