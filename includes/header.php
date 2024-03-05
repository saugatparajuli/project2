<?php
session_start();
$qrycat = "SELECT * FROM categories ORDER BY priority";
include 'includes/dbconnection.php';
$resultcat = mysqli_query($conn, $qrycat);
include 'includes/closeconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>

    <nav class="flex bg-orange-500 px-20 items-center justify-between">
        <img src="https://icms-image.slatic.net/images/ims-web/e6ac6883-1158-4663-bda4-df5a1aa066e5.png" alt="">
        <div>
            <a href="index.php" class="text-lg font-bold text-white px-5">Home</a>
            <?php
            while($rowcat = mysqli_fetch_assoc($resultcat)){ 
            ?>
            <a href="categoryproduct.php?category=<?php echo $rowcat['id']; ?>" class="text-lg font-bold text-white px-5"><?php echo $rowcat['name']; ?></a>
            <?php } ?>
            <?php if(isset( $_SESSION['islogin'])){ ?>
                <a href="admin/logout.php" class="text-lg font-bold text-white px-5"><i class="ri-logout-box-r-line"></i></a>
                <?php } else { ?>
            <a href="login.php" class="text-lg font-bold text-white px-5"><i class="ri-login-box-fill"></i></a>
            <?php } ?>
        </div>
    </nav>