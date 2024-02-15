<?php
    $numbers = [2,4,1,6,3,8,5,7];
    $n=8;
    for($i=0;$i<=sizeof($numbers);$i+=1)
    {
        if($numbers[$i]===$n){
            echo $n." found on ".++$i." th position";
            break;
        }
        else{
            echo $n." not found";
        }
    }
?>

