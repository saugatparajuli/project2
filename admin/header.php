<?php session_start();
if  (!isset($_SESSION['islogin']))
{
    header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com" ></script>
</head>
<body>
    <?php if(isset($_SESSION['msg'])) {?>
    <div id="msg" class="fixed right-4 top-4 bg-blue-600 text-white px-8 py-2 rounded-xl text-xl font-bold ">
        <p><?php echo $_SESSION['msg']; ?></p>
    </div>
    <script>
        setTimeout(function(){
            document.getElementById('msg').style.display = 'none';
        },2000);
    </script>
    <?php 
    unset($_SESSION['msg']);
    }?>
    <div class="flex">
        <nav class="h-screen bg-blue-200 shadow w-56">
         <img class="bg-orange-500 p-5" src="https://icms-image.slatic.net/images/ims-web/e6ac6883-1158-4663-bda4-df5a1aa066e5.png" alt="">
         <div class="mt-5 pl-4 text-lg font-bold">
            <p> Hello welcome , <?php echo $_SESSION['Username']; ?></p>
            <a href="dashboard.php" class="block p-4 hover:bg-blue-300 my-2">Dashboard</a>
            <a href="categories.php" class="block p-4 hover:bg-blue-300 my-2">Categories</a>
            <a href="products.php" class="block p-4 hover:bg-blue-300 my-2">Products</a>
            <a href="customer.php" class="block p-4 hover:bg-blue-300 my-2">Customers</a>
            <a href="orders.php" class="block p-4 hover:bg-blue-300 my-2">Orders</a>
            <a href="logout.php" class="block p-4 hover:bg-blue-300 my-2">Logout</a>
         </div>
        </nav>
        <!-- For content part -->
        <div class="p-4 flex-1">