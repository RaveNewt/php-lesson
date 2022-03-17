<html>
    <head>
        <body>
            <h1>Array</h1>
            <form action="">
                <input type="text"name="S1" placeholder="name"><br>
                <input type="number"name ="num2" placeholder="age"><br>
                <input type="text"name ="num3" placeholder="place"><br>
                <input type="text"name ="S2" placeholder="name"><br>
                <input type="number"name ="num5" placeholder="age"><br>
                <input type="text"name ="num6" placeholder="place"><br>
                <input type="text"name ="S3" placeholder="name"><br>
                <input type="number"name ="num8" placeholder="age"><br>
                <input type="text"name ="num9" placeholder="place"><br>
                <br><button type="submit" name="show">Show</button><br>
            </form>
            <h3>Show Array</h3>
            <?php
            if(isset($_GET['show'])){
                $num1 = $_GET['S1'];
                $num2 = $_GET['num2'];
                $num3 = $_GET['num3'];
                $num4 = $_GET['S2'];
                $num5 = $_GET['num5'];
                $num6 = $_GET['num6'];
                $num7 = $_GET['S3'];
                $num8 = $_GET['num8'];
                $num9 = $_GET['num9'];
                $numbers = array (
                    array($num1, $num2, $num3),
                    array($num4, $num5, $num6),
                    array($num7, $num8, $num9)
                );
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                      echo " ".$numbers[$i][$j];
                    }
                    echo "<br>";
                  }
                  echo "<h3>Upper case letters</h3>";
                  echo strtoupper($num1)."<br>";
                  echo strtoupper($num4)."<br>";
                  echo strtoupper($num7)."<br>";
                  
                  echo "<h3>Age with keyword</h3>";
                  $age = array($num1 => $num2, $num4=>$num5, $num7=>$num8);
                  foreach($age as $x => $val) {
                    echo "$x = $val<br>";
                  }
                  echo "<h3>Place with keyword</h3>";
                  $place = array($num1 => $num3, $num4=>$num6, $num7=>$num9);
                  foreach($place as $x => $val) {
                    echo "$x = $val<br>";
                  }
            }
            echo "<h3>left star</h3>";
            $i = 0;
            do{
                $j = 0;
                while($j<=$i){
                    $j++;
                    echo"*";
                }
                $i++;
                echo "<br>";
            } while($i<10);
            
            /*$three = array(
                array(3,array(2,3)),
                array(3,array(4,5))
            );
            for ($a = 0; $a < sizeof($three); $a++){
                echo "<b>Row number $a</b><br>";
                for($b = 0; $b < sizeof($three[$a]); $b++){
                    echo "<b>book-$a</b><br>";
                    for($c = 0; $c < sizeof($three[$a][$b]); $c++){
                        echo" ".$three[$a][$b][$c]; 
                    }
                    echo"<br><br>";
                }
            }*/
            
            ?>
        </body>
    </head>
</html>