<?php declare(strict_types = 1);?>
<html>
    <head>
        <body>
            <h1>1. debug gcd</h1>
            <p>There is no input 2 in function so we replace with "$y" and 
                ternary operaor is not working when you have return value so just change into if-else  </p>
        <?php
            function gcd($x, $y) {
                ($y == 0)? $x: gcd($y, $x%$y);
                if ($y == 0){
                    return $x;
                }
                return gcd($y, $x%$y);
            }
            
            $x = 1;
            $y = 1;
            
            echo "GCD of $x and $y is: ".gcd($x,$y);
        ?>

            <h1>2. Prime n number problem</h1>
            <?php  
            $count = 0;  
            $n = 2; 
            $input = 5; //input number that you want
            for($count = 0; $count<=$input; $n++){
                $j=0; 
                for ( $i=1; $i<=$n; $i++){
                    if (($n%$i)==0){
                    $j++;
                    }
                }
                if ($j<3){
                    echo $n." ";  
                    $count=$count+1;
                }
            }
            
            ?>
            <br> 
            <h1>3. Star problem</h1>
            <p>//i don't know why space symbol " " is not workin so i replace with 0 as space</p>
            <?php 
            //input star number 
            $star_input = 9;//input star number
            for($i=$star_input;$i>=1;$i=$i-2){  
                for($k=$star_input-1;$k>=$i;$k--){  
                    //i don't know why space symbol " " is not workin so i replace with 0 as space
                    echo "&nbsp";   
                }  
                for($j=1;$j<=$i;$j++){  
                    echo "*";  
                }  
                echo "<br>";  
            } 
            for($i=3;$i<=$star_input;$i=$i+2){  
                for($k=$star_input-1;$k>=$i;$k--){  
                    echo "&nbsp";  
                }  
                for($j=1;$j<=$i;$j++){  
                    echo "*";  
                }  
                echo "<br>";  
            }   
            ?> 
        </body>
    </head>
</html>