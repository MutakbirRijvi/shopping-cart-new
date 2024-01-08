<?php 
include('connection.php');
?>

<!DOCTYPE html>
    <head>
        <title>Product</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        echo "
                <div class='alert alert-success'>
                <div class = 'row'>
                <div><strong>Inserted successfully!</strong></div>              
                </div>
                
                </div>
                " ;
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
    <div class = "container">
    <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "GET"> 
    <br>
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
    <input type="text" name="product_name" class="form-control col-sm-10" placeholder="Your product" aria-label="Email" aria-describedby="basic-addon1" size="20" />
    </div>
    </div>
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Choose one from here</label>
    <div class="col-sm-10">
    <select name="product_category" class = "form-select">
        <?php 

            while($data = mysqli_fetch_array($query)){
            $id = $data['id'];
            $catagory_name = $data['category_name'];
            echo "<option name = '$id'>$catagory_name</option>";
            }
        ?>
    </select>
    </div>
    </div>
    
    <br>
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Product Code</label>
    <div class="col-sm-10">
    <input type="text" name="product_code" class="form-control col-sm-10" placeholder="Product code" aria-label="Email" aria-describedby="basic-addon1" size="20" />
    </div>
    </div>
    <br>
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Product Entry Date</label>
    <div class="col-sm-10">
    <input type="date" name="product_entry_date" class="form-control col-sm-10" placeholder="Product entry date" aria-label="Email" aria-describedby="basic-addon1" size="20" />
    </div>
    </div>
    <input type = "submit" class = "btn btn-success" value ="submit">

</form>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
