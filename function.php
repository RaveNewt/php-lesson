<?php declare(strict_types=1);?>
<html>
    <head>
        <body>
            <?php
            echo "<h2>float to int function</h2>";
            function addNumbers(float $a, float $b) : int {
                return (int)($a + $b);
              }
              echo addNumbers(80.6, 70.4);  
            ?>
            <br>
            <h2>If you click will add five</h2>
            <form action="">
                <input type="number" value="" name="num1">
                <button type="submit" name="click me" onclick="add_five()">Click me</button>
            </form>
            <?php
            if(isset($_GET["click me"])){
                $num1 = $_GET['num1'];
                function add_five(&$value) {
                    $value += 5;
                }
                $num1 = 0;
                add_five($num);
                echo $num1;
            }
            ?>
        </body>
    </head>
</html>