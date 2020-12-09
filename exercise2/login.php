<?php
       if(isset($_POST['submit'])){
          header('location:home.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="mask rainy-ashville-gradient align-items-center">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="card login mx-auto d-block mw-100">
                <div class="card-body">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <h2 class="text-center mt-3">Login</h2>
                            <p class="text-center mt-3 mb-4">Please fill in your email and password.</p>
                            <div class="form-group mt-3 mx-1">
                                <div class="input-group">
                                    <input type="email" class="form-control py-4 mt-3 mr-2" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                </div>
                            </div>
                            <div class="form-group mx-1">
                                <div class="input-group">   
                                    <input type="password" class="form-control py-4 mr-2" id="inputPassword1" placeholder="Password" required>
                                </div>
                            </div>  
                            <div class="form-group form-check pt-2 ml-3 mt-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="form-group text-center mt-4">
                                <input type="submit"  name="submit" class="btn btn-ladaga btn-lg rounded-pill active" aria-pressed="true" value="Submit" style="font-size:18px; width: 15rem;">
                            </div>
                            <p class="text-center mt-4" style="font-size: 15px;">Don't have an account? <a href="registration.php">Register here</a>.</p>
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