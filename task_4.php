<?php
function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    
    echo "Fibonacci Series up to $n numbers:\n";
    echo $fib[0] . " " . $fib[1] . " "; // Print the first two Fibonacci numbers
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo $fib[$i] . " "; // Print the next Fibonacci number
    }
}

// Call the function to print the Fibonacci series up to 10 numbers
fibonacci(15);
?>