<!--php program to find a large number among three numbers with html-->
<!DOCTYPE html>
<html>

<head>
    <title>Find Largest Number</title>
</head>

<body>
    <h1>Find the Largest Number</h1>
    <form method="POST" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required><br>

        <label for="num3">Number 3:</label>
        <input type="number" name="num3" required><br>

        <button type="submit" name="submit">Find Largest</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $number1 = $_POST['num1'];
            $number2 = $_POST['num2'];
            $number3 = $_POST['num3'];

            $largestNumber = max($number1, $number2, $number3);

            echo "<h2>The largest number is: ".$largestNumber."</h2>";
        }
        ?>
</body>

</html>