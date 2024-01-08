<?php 
include("connection.php");
?>

<!DOCTYPE html>
<head>
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>    

<?php

    if(isset($_GET['category_name'])){
        $catagory_name = $_GET['category_name'];
        $catagory_entrydate = $_GET['category_entrydate'];
        $sql = "INSERT INTO catagory(category_name,category_entrydate) VALUES('$catagory_name','$catagory_entrydate')";  

        if(mysqli_query($conn,$sql))
        {
            echo "Data inserted!";
        }
    }




?>

<div class = "container">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    Add Catagory:<br>
    <input type="text" name = "category_name"><br><br>
    Entry Date:<br>
    <input type="date" name = "category_entrydate"><br><br>

    <input type="submit" value= "submit">
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>