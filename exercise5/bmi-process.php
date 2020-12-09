<?php 

    session_start();

    $bmi = $output = "";
    // $error = array('mass' => '','height'=> '');

    if(isset($_POST['submit'])){  
        $mass = $_POST['mass'];
        $height = $_POST['height'];        

        if($mass == ''){
            echo "<script> alert('Please complete the input field')</script>";
        }elseif ($height == '') {
            echo "<script> alert('Please complete the input field')</script>";
        }
        else{
            // $bmi = $mass /($height/100 )**2;
            $bmi = ($mass/$height/$height)*10000;
            if ($bmi <= 18.5) {
                $output = "Under Weight";
                } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                $output = "Normal Weight";
                } else if ($bmi > 24.9 AND $bmi<=29.9) {
                $output = "Over Weight";
                } else if ($bmi > 30.0) {
                $output = "OBESE";
                }

                // $isErr = false; //check if the input is an error or not
                
                // foreach($error as $key => $value){
                //     if($value != ""){
                //         $isErr = true;
                //         break;
                //     }
                //     if(!$isErr)
                //     {
                $_SESSION['input'] = array($bmi,$output);
                    header("location:result.php");
                //     }else{
                //         // print_r($error);
                //     }
                // }
        }   
    }

    if(isset($_POST['back'])){
    header("location:bmi-calculator.php");
    }
?>
