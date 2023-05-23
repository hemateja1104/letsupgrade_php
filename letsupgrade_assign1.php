<?php
    
    $number1 = (int)readline('Enter a number: ');
    $number2 = (int)readline('Enter another number: ');
    $number3 = (int)readline('Enter another number: ');

    $largestNumber = max($number1, $number2, $number3);

    echo "The largest number is: ".$largestNumber;

?>