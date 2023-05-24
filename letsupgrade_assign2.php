<?php
$number = (int)readline("Enter any Number: ");

echo "Multiplication table of $number:\n";
for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number x $i = $result\n";
}
?>
