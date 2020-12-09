<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function Display(){
        
    for ($num = 1; $num <= 100; $num++){
        if ($num % 3 == 0 && $num % 5 == 0){
            echo "FizzBuzz\n";
        }
        elseif ($num % 3 == 0){
            echo "Fizz\n";
        }
        elseif ($num % 5 == 0){
            echo "Buzz\n";
        }
        else{
            echo $num;
            echo "\n";
        }

    }
}
    Display();
    ?>
</body>
</html>