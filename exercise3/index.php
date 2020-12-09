<?php
    define("TITLE", "Honest Click Bait Headlines");
    if( isset( $_POST["Submit"] ) ){
        checkForClickBait();
    }
    function checkForClickBait() {
            $clickBait = strtolower($_POST["clickbait_Headline"]);
            $clickbait_words = array(
                "scientists",
                "doctors",
                "hate",
                "stupid",
                "weird",
                "simple",
                "tricked",
                "shocked me",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable"
            );

            $replacement_words = array(
                "so-called scientists",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "ineffective",
                "method",
                "is no different than the others",
                "you won't really be surprise by",
                "slightly improve",
                "boring",
                "normal"
                );
            $honest = str_replace($clickbait_words, $replacement_words, $clickBait);

            return array($clickBait, $honest);
    }
    function displayHonestHeadline($x, $y) {
            echo "<strong class='text-danger'>Orignal Headline</strong> <h4>".ucwords($x)."</h4><h4>";
            echo "<strong class='text-success'>Honest Headline</strong> <h4>".ucwords($y)."</h4>";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo TITLE; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style> 
            body {
                background-image: url("bg-1.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover; 
                height: 100%;
             }
             .rainy-ashville-gradient {

                background: -moz-linear-gradient(120deg, rgba( 193, 223, 196, 0.5), rgba( 222, 236, 221, 0.5) 100%);
                background: -webkit-linear-gradient(120deg, rgba( 193, 223, 196, 0.5), rgba( 222, 236, 221, 0.5) 100%);
                background: -webkit-gradient(linear, 120deg, from(rgba( 193, 223, 196, 0.5)), to(rgba( 222, 236, 221, 0.5)));
                background: -o-linear-gradient(120deg, rgba(193, 223, 196, 0.5), rgba( 222, 236, 221, 0.5) 100%); 
                background: linear-gradient(to 120deg, rgba(193, 223, 196, 0.5), rgba( 222, 236, 221, 0.5) 100%);
                height: 800px; 
             }

            .btn-sunny-morning {
                background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            }
        </style>
    </head>
    <body>
        <div class="mask rainy-ashville-gradient align-items-center">
            <div class="container-fluid mx-auto d-block">   
                <div class="text-center"> 
                    <br><br><br><br>
                    <h1 class="mt-5"><?php echo TITLE; ?></h1>
                    <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>    
                </div>   
                <div class="row d-flex justify-content-center mt-5">
                    <form class="col-sm-8 col-sm-offset-2 mt-5" action="" method="post">
                        <textarea placeholder = "Paste click bait headline here." class="form-control input-lg" name="clickbait_Headline"></textarea>
                        <button type="submit" class="btn btn-sunny-morning btn-lg rounded-pill mx-auto d-block active mt-5" name="Submit" style="font-size:20px; width: 13rem;">Make Honest!</button>
                    </form>
                </div>
                <?php
                    if ( isset( $_POST["Submit"] ) ) {
                        $clickBait = checkForClickBait()[0];
                        $honest = checkForClickBait()[1];

                    displayHonestHeadline( $clickBait, $honest );
                    }
                ?>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body> 
</html>