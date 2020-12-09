<?php
       if(isset($_POST['submit'])){
          header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="mask rainy-ashville-gradient align-items-center">
    <div class="container-fluid mx-auto d-block">   
        <div class="row d-flex justify-content-center">
            <div class="card mw-100">
                <div class="card-body">
                    <div class="col-md-12">
                        <form action="login.php" method="POST">
                            <h2 class="text-center mt-2">Sign Up</h2>
                            <p class="text-center mt-3 mb-4">Please fill this form to create an account.</p>
                            <div class="form-label-group mx-4 mb-2">
                                <div class="input-group mt-1">
                                    <input type="text" class="form-control" id="fName" aria-describedby="firstname" placeholder="Firstname" required autofocus>
                                </div>
                            </div>
                            <div class="form-label-group mx-4 mb-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="lName" aria-describedby="lastname" placeholder="Lastname" required>
                                </div>
                            </div>
                            <div class="form-label-group mx-4 mb-2">
                                <div class="input-group mt-1">
                                    <input type="text" class="form-control" id="address" aria-describedby="nameHelp" placeholder="Address" required>
                                </div>
                            </div>
                            <div class="form-label-group mx-4 mb-2">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email Address" required>
                                </div> 
                            </div>
                            <div class="form-label-group mx-4 mb-2">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="confirmEmail" aria-describedby="emailHelp" placeholder="Confirm Email" required>
                                </div>
                            </div>
                            <div class="form-label-group mx-4 mb-2">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                                </div>
                                <small id="passwordHelpInline" class="text-muted">
                                    Must be 8-20 characters long.
                                </small>
                            </div>
                            <div class="form-label-group mx-4 mb-3">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="inputPassword-repeat" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="form-label-group mt-2 text-center">
                                <input type="submit"  name="submit" class="btn btn-ladaga btn-lg rounded-pill active" aria-pressed="true" value="Sign up" style="font-size:18px; width: 15rem;">
                            </div>
                            <p class="text-center mt-2" style="font-size: 15px;">Already have an account? <a href="login.php">Login here</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>