<?php
    include('bmi-process.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Marmelad' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mask bg-col align-items-center" style="height: 43.4rem">
        <div class="container-fluid mx-auto d-block"> 
            <div class="row d-flex justify-content-center">  
                <div class="card mw-100 mt-5" style="top: 4rem;">
                    <div class="card-body mx-4">
                        <form method="POST" action="">
                            <h2 class="mt-4">Hello!</h2>
                            <div class="form-group mt-5">
                             <!--- Checks if there is an input which will return its result otherwise prompts an input --->
                                <h4 class="mb-4">Your BMI is: <?php echo isset($_SESSION['input']) ? $_SESSION['input'][0]: "";?></h4>
                                <h4>Equivalent: <?php echo isset($_SESSION['input']) ? $_SESSION['input'][1]: "" ;?></h4>
                            </div>
                            <input type="submit"  name="back" class="btn btn-ladaga btn-lg rounded-pill active mx-auto d-block mt-5" aria-pressed="true" value="Calculate Again" style="font-size:18px; width: 15rem;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
