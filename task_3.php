<?php
$num1 = 0;
$num2 = 1;

echo "Fibonacci numbers up to 10 with a break when a number exceeds 100:\n";

for ($i = 1; $i <= 10; $i++) {
    $fibonacci = $num1;
    echo $fibonacci . " ";

    // Calculate the next Fibonacci number
    $num3 = $num1 + $num2;
    
    // Update values for the next iteration
    $num1 = $num2;
    $num2 = $num3;

    // Check if the Fibonacci number exceeds 100
    if ($fibonacci > 100) {
        break; // Break out of the loop
    }
}

?>