<?php 
function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

echo "Using for loop: ";
printEvenNumbersWithForLoop(2, 20, 2);
echo "<br>";

function printEvenNumbersWithWhileLoop($start, $end, $step){
    $i = $start;
    while($i <= $end){
        echo $i . " ";
        $i+=$step;
    }
}
echo "Using While loop: ";
printEvenNumbersWithWhileLoop(2, 20, 2);
echo "<br>";

function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

echo "Using do-while loop: ";
printEvenNumbersWithDoWhileLoop(2, 20, 2);
?>