<?php 
    include("connection.php");
?>

<!DOCTYPE html>
    <head>
        <title>Sign In</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <?php 
        if(isset($_GET['firstname']))
        {
            //$user_id  = $_GET['user_id'];
            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
            $email = $_GET['email'];    
            $pass = $_GET['pass'];
            $sql = "INSERT INTO user (firstname,lastname,email,pass) VALUES('$firstname','$lastname','$email','$pass')";
            if($conn->query($sql)===TRUE)
            {
                echo "
                <div class='alert alert-success'>
                <div class = 'row'>
                <div class = 'col-sm-5'><strong>Sign Up successfully!</strong></div>
                <div class = 'col-sm-7'><button class = 'btn btn-primary'><a href='login.php' class = 'text-decoration-none text-white'>Login</a></button></div>
                
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
    <div class = "container">
    <h3>Sign In</h3>
        <br>
    <form action = "signin.php" method = "GET"> 
    Firstname:<br>
    <input type = "text" name ="firstname"><br><br>
    Lastname:<br>
    <input type = "text" name ="lastname"><br><br>
    E-mail:<br>
    <input type = "email" name ="email"><br><br>
    Password:<br>
    <input type = "password" name ="pass"><br><br>
    <input type = "submit" class = "btn btn-primary" value ="Sign In">

    </form>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</html>