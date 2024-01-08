<?php 
include('connection.php');
?>

<!DOCTYPE html>
<head>
    <title>List of product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php 
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0) 
        {
            echo "<div class = 'container'>
            <table border = '1' class='table table-success table-striped'><tr><th>Product Name</th><th>Product Category</th><th>Product Code</th><th>Product Entry Date</th><th>Update</th></th><th>Delete</th></tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                $product_id = $data['product_id'];
                $product_name = $data['product_name'];
                $product_category = $data['product_category'];
                $product_code = $data['product_code'];
                $product_entry_date = $data['product_entry_date'];
                $sql1 = "DELETE FROM product WHERE product_id = $product_id";
                if ($conn->query($sql1) === TRUE) {
                    echo "Record deleted successfully";
                  } else {
                    echo "Error deleting record: " . $conn->error;
                  }
                echo "<tr><td>$product_name</td><td>$product_category</td><td>$product_code</td><td>$product_entry_date</td><td><a href='edit_product.php?id=$product_id' class = 'btn btn-primary text-decoration-none text-white'>Edit</a></td><td><a href='list_of_product.php?id=$product_id' class = 'btn btn-danger text-decoration-none text-white'>Delete</a></td></tr>";
            }
            echo "</table>
            </div>";
        }
        else
        {
            echo "0 Results";
        }
    
        
        mysqli_close($conn);
    ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>