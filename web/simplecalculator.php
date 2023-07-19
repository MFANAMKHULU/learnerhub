<html>
<head>
    <title> Calculator</title>
    <!--18 july 2023-->
    <!--10:00-->
</head>
<body>   
        <label for="num1">First number:</label>
        <input type="number" name="num1" required><br>

        <label for="num2">Second number:</label>
        <input type="number" name="num2" required><br>
      
           <!--11:00-->
           <label for="operation">operators:</label>
         <select name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br>
  
        <input type="submit" value="Calculate">
       
        <?php
     # 12:00
     if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
        # Retrieve calculations
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

          # 13:00
     switch ($operation)
     {
         case "add":
             $result = $num1 + $num2;
             break;
             case "subtract":
                 $result = $num1 - $num2;
                 break;
                 case "multiply":
                     $result = $num1 * $num2;
                     break;
                      # 14:00
                  /* case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero!";
                    }
                    break;
                default:
                    $result = "Invalid operation";
                    break;  */
     } 
     #15:00
    #
    echo "Result: " . $result; 
   }
     ?>

</body>
</html>         