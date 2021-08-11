<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//     Ex1.
//     for ($x=0; $x=50; $x++){
//        echo "Bilal Chabbi <br>"; 
//    }
//    /
//    $x=0;
//    while($x=50){
//        echo "Bilal Chabbi <br>";
//    }

// $array=array(12,232,8292,38738,9303,123,98,80,32,90);
//     foreach($array as $value);{
        
//         echo "Output $value <br>";
//     }

$scores = array(23,24,97,98,45,67,77,78,87,12);
$rand_keys= array_rand($scores, 2);
echo $scores[$rand_keys[0]] . "\n";
echo $scores[$rand_keys[1]] . "\n";


    ?>
</body>
</html>