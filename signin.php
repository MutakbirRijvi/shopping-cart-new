<?php 
    include("connection.php");
?>

<!DOCTYPE html>
    <head>
        <title>Sign In</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <div class = 'col-sm-9'>
                    <strong>Sign Up successfully!</strong>
                    </div>
                    <div class = 'col-sm-3'>
                    <p><a href='login.php' class = 'text-white text-decoration-none btn btn-primary'>Login</a></p>
                    </div>
                </div>
                </div>
                " ;
            }
            else
            {
                echo "
                <div class='alert alert-danger'>
                
                <strong>Failed!</strong>
                
                </div>
                " ;
            }
            
        }


        

    ?>
    
    <div class = "container p-3">
        <h3>Sign in first to shopping from store</h3>
    <form action = "signin.php" method = "GET"> 
    <br>
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">First name</label>
    <div class="col-sm-10">
    <input type="text" name="firstname" class="form-control col-sm-10" placeholder="Your first name" aria-label="Email" aria-describedby="basic-addon1" size="20" />
    </div>
    </div>
    <br>
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Last name</label>
    <div class="col-sm-10">
    <input type="text" name="lastname" class="form-control col-sm-10" placeholder="Your last name" aria-label="Email" aria-describedby="basic-addon1" size="20" />
    </div>
    </div>
    <br>
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="email" name="email" class="form-control col-sm-10" placeholder="Your email" aria-label="Email" aria-describedby="basic-addon1" size="20" />
    </div>
    </div>
    <br>
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
    <input type="password" name="pass" class="form-control col-sm-10" placeholder="Your password" aria-label="Password" aria-describedby="basic-addon1" size="20" />
    </div>
  </div><br><br>
    <input type = "submit" class = "btn btn-primary" value ="submit">

</form>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</html>
