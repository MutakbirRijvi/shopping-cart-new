<?php 
include('connection.php');
?>

<!DOCTYPE html>
<head>
    <title>List of catagory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php 
        $sql = "SELECT * FROM catagory";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0) 
        {
            echo "<div class = 'container'>
            <table border = '1' class='table table-success table-striped'><tr><th>Catagory Name</th><th>Catagory Entry Date</th><th>Update</th><th>Delete</th></tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                $id = $data['id'];
                $catagory_name = $data['category_name'];
                $catagory_entrydate = $data['category_entrydate'];
                echo "<tr><td>$catagory_name</td><td>$catagory_entrydate</td><td><button type = 'button' class = 'btn btn-primary'><a href='edit_catagory_list.php?id=$id'class = 'text-decoration-none text-white'>Edit</a></button</td><td><button type = 'button' class = 'btn btn-danger'><a href='edit_catagory_list.php?id=$id'class = 'text-decoration-none text-white'>Delete</a></button</td></tr>";
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