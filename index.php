<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Simple calculator with PHP</h3>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="number" name="num1" placeholder="Enter digits">
        <br><br>
        <input type="text" name="optn">
        <br><br>
        <input type="number" name="num2" placeholder="Enter digits">
        <br><br>
        <input type="submit" value="Submit">
        <br><br>
    </form>
    <p>Result:</p>

    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['optn'];

        if ($operation == '+') {
            echo $num1 + $num2;
        }elseif($operation == '-'){
            echo $num1 - $num2;
        }elseif($operation == '/'){
            echo $num1 / $num2;
        }elseif($operation == '*'){
            echo $num1 * $num2;
        }else{
            echo 'Invalid operation';
        }    
    
    ?>
</body>
</html>

