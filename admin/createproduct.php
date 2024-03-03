<?php include 'header.php';
include '../includes/dbconnection.php';
$qry = "SELECT * FROM Categories ORDER BY priority";
$result = mysqli_query($conn,$qry);
include '../includes/closeconnection.php';
?>

<h1 class="text3xl font-bold">Create New Product</h1>
<hr class="my-2 hy-1 bg-orange-500">

<form action="actionproduct.php" method="POST" enctype="multipart/form-data">

<select name="category_id" id="" class="p-2 bg-gray-100 border rounded-lg w-full my-3">
    <?php while($row = mysqli_fetch_assoc($result)){?>
    <option value="<?php echo $row['id']?>"><?php echo $row ['name'];?></option>
    <?php } ?>
</select>
        <input type="text"  name="name" placeholder="Enter Product Name" class="p-2 bg-gray-100 border rounded-lg w-full my-3">
        <input type="text"  name="description" placeholder="Enter Description" class="p-2 bg-gray-100 border rounded-lg w-full my-3">
        <input type="text"  name="price" placeholder="Enter Price" class="p-2 bg-gray-100 border rounded-lg w-full my-3">
        <input type="text"  name="stock" placeholder="Enter Stock" class="p-2 bg-gray-100 border rounded-lg w-full my-3">
        <select name="status" id="" class="p-2 bg-gray-100 border rounded-lg w-full my-3">
            <option value="">Show</option>
            <option value="">Hide</option>
        </select>

        <input type="file" name="photopath" class="p-2 bg-gray-100 border rounded-lg w-full my-3">

        <div class="flex justify-center gap-5 mt-5">
            <input type="submit" name="store" value="Add Product"
            class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer">
            <a href="products.php"class="p-2 bg-red-500 text-white px-8 py-2 rounded">Exit</a>
        </div>
    </form>


<?php include 'footer.php';?>  