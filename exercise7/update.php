<?php

    include "connection.php";

    if(isset($_POST["submit"])){
        $lname = $_POST["lastname"];
        $fname = $_POST["firstname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql_update = "UPDATE users SET lastname='".$lname."',firstname='".$fname."',email='".$email."',password='".$password."' WHERE id=".$_POST["id"];
        echo $sql_update;
        //check the query if its executed well
        if(mysqli_query($conn, $sql_update)){
            echo "Updated new row";
            header("location: user.php");
        }else{
            echo "ERROR: ". mysqli_error($conn);
        }

    }
    if(isset($_GET["id"])){
        $sql = "SELECT * FROM users WHERE id=".$_GET['id'];
        $result = mysqli_query($conn,$sql);
        $users = mysqli_fetch_assoc($result);
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <div class="mask rainy-ashville-gradient align-items-center">
        <div class="container-fluid">   
            <div class="row d-flex justify-content-center">
                <div class="card mw-100 mt-5">
                    <div class="card-body mx-auto d-block">
                        <div class="col-md-12">
                            <h3 class="login-heading mb-4">Update</h3>
                            <form method="POST" action="update.php">
                                <input type="hidden" name="id" value="<?php echo $users['id'];?>">
                                <div class="form-label-group">
                                    <input class="form-control" type="text" value="<?php echo $users['firstname'];?>" name="firstname" placeholder="First Name" required minlength=2 maxlength=25>
                                </div>
                                <div class="form-label-group">
                                    <input class="form-control" type="text" name="lastname" placeholder="Last Name" value="<?php echo $users['lastname'];?>" required minlength=2 maxlength=25>
                                </div>           
                                <div class="form-label-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email Address" value="<?php echo $users['email'];?>" required>
                                </div>
                                <div class="form-label-group">
                                    <input class="form-control" type="email" name="confirmemail" placeholder="Confirm Email Address" value="<?php echo $users['email'];?>" required>
                                </div>
                                <div class="form-label-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo $users['password'];?>" required minlength=8>
                                </div>
                                <div class="form-label-group">
                                    <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password" value="<?php echo $users['password'];?>" required minlength=8>
                                </div> 
                                <div class="form-label-group mt-3 text-center">
                                    <input type="submit"  name="submit" class="btn btn-royal-garden btn-lg rounded-pill active" aria-pressed="true" value="Update">
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