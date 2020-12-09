<?php

    include "connection.php";

    if(isset($_POST["submit"])){
        $lName = $_POST["lastname"];
        $fName = $_POST["firstname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO `users` (`lastname`, `firstname`, `email`, `password`) VALUES('$lName','$fName','$email','$password')";

        //check the query if its executed well
        if(mysqli_query($conn, $sql)){
            echo "Inserted a new row";
            header("location: user.php");
        }else{
            echo "ERROR: ". mysqli_error($conn);
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href='https://fonts.googleapis.com/css?family=Marmelad' rel='stylesheet'>
     <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <div class="mask rainy-ashville-gradient align-items-center" style="height: 43.4rem">
        <div class="container-fluid">   
            <div class="row d-flex justify-content-center">
                <div class="card mw-100 mt-4">
                    <div class="card-body mx-auto d-block">
                        <div class="col-md-12">
                            <h2 class="login-heading mb-4">Register</h2>
                            <form method="post" action="index.php">
                                <div class="form-label-group">
                                    <input type="text" name="firstname" class="form-control" placeholder="First Name" required autofocus>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                                <div class="form-label-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required>
                                </div>
                                <div class="form-label-group">
                                    <input type="email" name="confirmEmail" class="form-control" placeholder="Confirm Email" required>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-label-group mt-3 text-center">
                                    <input type="submit"  name="submit" class="btn btn-royal-garden btn-lg rounded-pill active" aria-pressed="true" value="Sign up">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>