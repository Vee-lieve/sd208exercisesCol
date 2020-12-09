<?php
    include "connection.php";

    if(isset($_POST['update'])){
        header('location: update.php?id='.$_POST['id']);
    }

    if(isset($_POST['delete'])){
        $sql_delete = "DELETE FROM users WHERE id=". $_POST['id'];
      
        //check query if executed well
        if(mysqli_query($conn, $sql_delete)){
            // echo "Deleted Successfully";
        }else{
            echo "ERROR: ". mysqli_error($conn);
        }
    }
    $sql = "SELECT * FROM `users`";

    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Form Handler</title>
</head>
<body>
    <div class="mask rainy-ashville-gradient align-items-center">
        <div class="container-fluid">   
            <div class="row d-flex justify-content-center">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(mysqli_num_rows($result) > 0){
                                //output data each row
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr>
                                        <th><?php echo $row["id"];?></th>
                                        <td><?php echo $row["lastname"];?></td>
                                        <td><?php echo $row["firstname"];?></td>
                                        <td><?php echo $row["email"];?></td>
                                        <td>
                                            <form action="./user.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                                                <button type="submit" name="update">UPDATE</button>
                                                <button type="submit" name="delete">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }else{
                                echo " 0 result";  
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>