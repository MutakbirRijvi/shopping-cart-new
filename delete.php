<?php
session_start();
include('connection.php');
?>

<!DOCTYPE html>
<head>
    <title>List of catagory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<html>

<?php
if(isset($_GET['user_id']))
                {
                    $user_id = $_GET['user_id'];
                    $sql1 = "DELETE FROM user WHERE user_id = $user_id";
                    $delete = mysqli_query($conn,$sql1);
                    if($delete)
                {
                    $_SESSION['message'] = "<p class = 'alert alert-success'>Delete Successful!</p>";
                    header('location:userlist.php');
                }
                }

                
?>
