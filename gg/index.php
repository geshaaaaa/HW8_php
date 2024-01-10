<?php
$i = 1;
while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;

}
$i = 1;
$factorial = 1;
$number = 5;
while ($i <= $number) {
    $factorial *= $i;
    $i++;
}
echo "Факторіал $number: $factorial" . PHP_EOL;

$i = 1;
while ($i <= 20) {
    if ($i % 2 === 0) {
        echo $i . PHP_EOL;
    }
    $i++;

}