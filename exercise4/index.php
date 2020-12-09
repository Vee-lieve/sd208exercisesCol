<?php
   include "form-handler.php";
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sansita Swashed' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mask img-gradient align-items-center">
        <div class="container-fluid">
            <div class="row d-flex jusitfy-content-center">
                <div class="card mx-auto d-block mw-100 mt-5">
                    <div class="card-body mx-auto d-block text-center">
                        <div class="col-md-12">
                            <h3 class="login-heading mb-4">Sign Up</h3>
                            <p class="text-center mt-2 mb-4" style="font-size:19px; font-family: Sansita Swashed;">Please fill this form to create an account.</p>
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-label-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control"  name="fname" id="fName" placeholder="First name" required autofocus>
                                    </div>
                                    <small id="fName" class="error"><?php echo $fNameErr; ?></small>
                                </div>        
                                <div class="form-label-group">
                                    <div class="input-group">
                                        <input type="text"  class="form-control" name="lname" id="lName" placeholder="Last Name" required>
                                    </div>
                                    <small id="lName" class="error"><?php echo $lNameErr; ?></small>
                                </div>
                                <div class="form-label-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="Email Address" required>
                                    </div> 
                                    <small id="inputEmail" class="error"><?php echo $emailErr; ?></small>
                                </div> 
                                <div class="form-label-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="address" id="address" aria-describedby="nameHelp" placeholder="Address" required>
                                    </div>
                                    <small id="address" class="error"><?php echo $addressErr; ?></small>
                                </div>
                                <div class="form-label-group mt-3 text-center">
                                    <input type="submit" name="submit" class="btn registerbtn btn-lg rounded-pill active" value="Submit">        
                                </div>
                            </form>     
                        </div>  
                        <?php if ($fNameErr === "" && $lNameErr === "" && $emailErr === "" & $addressErr === "" && isset($_POST['submit'])) { ?>
                            <div class="card-footer text-left bg-transparent">
                                <p>Your first name is  <?php echo $_POST['fname'] ?? '';?></p>
                                <p>Your last name is  <?php echo $_POST['lname'] ?? '';?></p>
                                <p>Your email is  <?php echo $_POST['email'] ?? '';?></p>
                                <p>Your address is  <?php echo $_POST['address'] ?? '';?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>