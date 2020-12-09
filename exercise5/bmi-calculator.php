<?php
include ('bmi-process.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Marmelad' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mask bg-col align-items-center" style="height: 43.4rem">
        <div class="container-fluid mx-auto d-block"> 
            <div class="row d-flex justify-content-center">  
                <div class="card mw-100" style="top: 7rem;">
                    <div class="card-body mx-4">
                        <form method="POST" action="">
                            <h2>BMI CALCULATOR</h2>
                            <div class="form-group mt-5">
                                <label for="mass">Mass in kilogram (kg)</label>
                                <input type="number" class="form-control" id="mass" name="mass" aria-describedby="massInKg" placeholder="Enter mass">
                            </div>
                            <div class="form-group mt-4">
                                <label for="height">Height in centimeter (cm)</label>
                                <input type="number" class="form-control" id="height" name="height" placeholder="Enter height">
                            </div>
                            <input type="submit"  name="submit" class="btn btn-ladaga btn-lg rounded-pill active mx-auto d-block mt-4" aria-pressed="true" value="Submit" style="font-size:18px; width: 15rem;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>