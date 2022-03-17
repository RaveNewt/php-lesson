<html>
    <head>
        <body>
            <form action="">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="submit" onclick="myFunction()">Submit</button>
            </form>

            <?php
            if(isset($_GET["submit"])){
                $a = $_GET["username"];
                $b = $_POST["password"];
                
                /*echo $a;
                echo " ')'</script>";*/
                if($a != "" && $b == $b ){
                    echo'<script>';
                    echo 'function myFunction()';
                    echo '{alert("Welcome to Hello World, '; 
                    echo $a;
                    echo'");}</script>';
                }
            }
            
            ?>
            <!--<script>
                function myFunction() {
                    alert("Hello! I am an alert box!");
                }
            </script>-->
        </body>
    </head>
</html>