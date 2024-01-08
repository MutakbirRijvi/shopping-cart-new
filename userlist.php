<?php 
error_reporting(0);
session_start();
include('connection.php');
include('delete.php');

if($_SESSION['message'])
{
    echo $_SESSION['message'];
}
unset($_SESSION['message']);
?>

<!DOCTYPE html>
<head>
    <title>List of catagory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php 
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0) 
        {
            echo "
            <div class = 'container'>
            <table border = '1' class='table table-success table-striped'><tr><th>Fisrt Name</th><th>Last Name</th><th>E-mail</th><th>password</th><th>Edit</th><th>Delete</th></tr>";
            while($data = mysqli_fetch_assoc($result))
            {
                $user_id = $data['user_id'];
                $firstname = $data['firstname'];
                $lastname = $data['lastname'];
                $email = $data['email'];
                $pass = $data['pass'];
                
                echo "<tr><td>$firstname</td><td>$lastname</td><td>$email</td><td>$pass</td><td><button type = 'button' class = 'btn btn-primary'><a href='userlist.php?user_id=$user_id' class = 'text-decoration-none text-white'>Edit</a></button</td><td><button type = 'button' class = 'btn btn-danger'><a href='delete.php?user_id=$user_id' class = 'text-decoration-none text-white'>Delete</a></button</td></tr>";
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