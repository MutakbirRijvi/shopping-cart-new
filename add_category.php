<?php 
include('connection.php');
?>

<!DOCTYPE html>
    <head>
        <title>Product</title>
    </head>
<body>
    <?php 
        if(isset($_GET['product_name']))
        {
            $product_name = $_GET['product_name'];
            $product_category = $_GET['product_category'];
            $product_code = $_GET['product_code'];
            $product_entry_date = $_GET['product_entry_date'];
            $sql = "INSERT INTO product (product_name,product_category,product_code,product_entry_date) 
            VALUES('$product_name','$product_category','$product_code','$product_entry_date')";
            if($conn->query($sql)==TRUE)
                    {
                        echo "inserted!";
                    }
                    else
                    {
                        echo"Failed!"; 
                    }
            
        }

    ?>

    <?php 
        $sql = "SELECT * FROM catagory";
        $query = $conn->query($sql); 
    ?>
<form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "GET"> 
    Product Name:<br>
    <input type = "text" name ="product_name"><br><br>
    Category Name:<br>
    <select name="product_category">
        <?php 

            while($data = mysqli_fetch_array($query)){
            $id = $data['id'];
            $catagory_name = $data['category_name'];
            echo "<option name = '$id'>$catagory_name</option>";
            }
        ?>
    </select><br><br>
    Product Code:<br>
    <input type = "text" name ="product_code"><br><br>
    Product Entry Date:<br>
    <input type = "date" name ="product_entry_date"><br><br>
    <input type = "submit" value ="submit">

</form>
</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>