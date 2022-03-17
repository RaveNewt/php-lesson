<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Calculator</h1>
    <form action="">
      <input type="number"name="num1">
      <input type="number"name ="num2">
      <select name="operator" id="">
        <button><option>+</option></button>
        <button><option>-</option></button>
        <button><option>x</option></button>
        <button><option>/</option></button>
      </select>
      <br><br>
      <button type="submit" name="calculate">Calculate</button>
    </form>
    <p>The answer is: </p>
    <?php 
    if(isset($_GET['calculate'])){
      $result1 = $_GET['num1'];
      $result2 = $_GET['num2'];
      $operator = $_GET['operator'];
      switch($operator){
        case "+":
          echo $result1 + $result2;
        break;
        case "-":
          echo $result1 - $result2;
        break;
        case "x":
          echo $result1 * $result2;
        break;
        case "/":
          echo $result1 / $result2;
        break;
      }
    }
    ?>
    <h1>Sign Up</h1>
    <form action="db/signup.php" method="POST">
      <input type="text" name="name" placeholder="Name">
      <br><br>
      <input type="password" name="pwd" placeholder="Password">
      <br><br>
      <input type="text" name="email" placeholder="Email">
      <br><br>
      <input type="text" name="city" placeholder="City">
      <br><br>
      <button type ="submit" name="submit">Sign up</button>
    </form><br>
    <h2>Fibonacci number</h2>
    <?php
    
    $a = 0;
    $b = 1;
    $fibonacci = 10;
    for($n =0;$n < $fibonacci;$n++){
      echo "$a", " ";
      $c = $a + $b;
      $a = $b;
      $b = $c;
    }
    ?>
    <h2>increment</h2>
    <?php
    $a = 26;
    echo "<p> Example 1:<p>";
    echo ++$a;
    $b =8;
    echo "<p> Example 2:<p>";
    echo $b>>2;
    $b++;
    ?>
    
  </body>
</html>