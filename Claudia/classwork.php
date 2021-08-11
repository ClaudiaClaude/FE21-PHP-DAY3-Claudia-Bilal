<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><p>
    <?php 

    // //exercise 01

        //  // version 01
        // for($i=0; $i<51; $i++) echo "Claudia <br>";

        //  // version 02
        // $i = 0;
        // while($i < 51){ 
        //     $i++;
        //     echo ( $i." Claudia <br>");
        // } 
        
        //  // version 03
        // $name = "Claudia";
        // $i = 0;

        // do {
        //     $i++;
        //     echo $i." ".$name."<br>";
        // }while ($i < 51);


    // //exercise 02

        // $numbers = array(80, 34, 10, 22, 4, 7, 21, 18, 92, 44);

        // foreach($numbers as $val){
        //     echo $val."<br>";
        // }


    // exercise number 03


        // // version 01
        
        // $numbers = array();


        // function generateprintHighest($arr){

        //     $arr = array();
        //     for($i=0; $i < 11; $i++){
        //         array_push( $arr, rand(0, 100));
    
                
        //         echo $arr[$i]." ";
        //     };

        //     rsort($arr);
            
            
        //     echo "The higest number is ".$arr[0];
        // }

        // generateprintHighest($numbers);


        // //version 02 

        // $numbers2 = array(80, 34, 10, 22, 4, 7, 21, 18, 92, 44);
        // $secondArr= array();

        // function geneRandArr($arr){
        //     for($i=0; $i < 10; $i++){
        //         array_push( $arr, rand(0, 100));
        //         echo $arr[$i]." ";
        //     }
        //     return $arr;
        // }

        // function printHighest($arr){
           
        //     if($arr != 0){
                
        //     rsort($arr);
        //     echo "<br>The highest number is ". $arr[0];}
            
        // }

        
        // for($i=0; $i < 10; $i++){
        //     echo $numbers2[$i]." ";
        // }
        // printHighest($numbers2);

        // echo "<br><br>";

        
        // // geneRandArr($secondArr);
        // // printHighest($secondArr);

        // printHighest(geneRandArr($secondArr));
        


    // //exercise 04

    function game(){

        for($i=1; $i < 101; $i++){

            if($i % 15 == 0){
                echo "Full Stack<br>";
            }
            elseif($i % 5 ==0){
                echo "Front-End<br>";
            }
            elseif($i % 3 ==0){
                echo "Back-end<br>";
            }
            else echo $i."<br>";


        }

    }


    game();



    ?>
    </p></div>
</body>
</html>