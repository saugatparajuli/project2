<?php
session_start();
if(isset($_POST['store']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $status = $_POST ['status'];
    $product_date = date('y-m-d');
    $photopath = $_FILES ['photopath'] ['name'];
    $tmp_name = $_FILES ['photopath'] ['tmp_name'];
    $photopath = time().$photopath;
    $filepath = "../uploads/".$photopath;
    move_uploaded_file($tmp_name, $filepath);

    include '../includes/dbconnection.php';
    $qry = "INSERT INTO products (category_id, name, description, price, stock, status, photopath, product_date) VALUES ($category_id, '$name', '$description', '$price', '$stock', '$status', '$photopath', '$product_date') ";
    $res = mysqli_query($conn, $qry);
    include '../includes/closeconnection.php';
    if($res)
    {
        $_SESSION['msg'] = "Product Created successfully";
        header('location:products.php');
    }
    else
    {
        echo "error";
    }
}
?>