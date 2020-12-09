<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $str = "SabRina V33 SuArEz <3 BlAcK DeMitr1";
    function countWords($str) {
        $arr = explode(" ", $str);
        $newArray = [];
        foreach ($arr as $arrayEl){
            $key = strtolower($arrayEl);
            if (array_key_exists($key , $newArray)){
                $value = $newArray[$key];
                $newArray[$key] = ++$value;
            }else{
                $newArray[$key] = 1;
            }
        }   
        return $newArray;
        
    }
    print_r(countWords($str));
?>    
</body>
</html>