<!DOCTYPE html>
<html>
<body>

<?php
$length = 10; 
$width  = 5;  


$area = $length * $width;
$perimeter = 2 * ($length + $width);


echo "<h2>Programming with PHP </h2>";
echo "<h3>Rectangle Calculation </h3>";
echo "Length: " . $length . " <br>";
echo "Width: " . $width . " <br>";
echo "Area of Rectangle = " . $area . " <br>";
echo "Perimeter of Rectangle = " . $perimeter . " <br>";



$amount = 100;  


$vatRate = 0.15;  


$vat = $amount * $vatRate;
$total = $amount + $vat;


echo "<h3>VAT Calculation</h3>";
echo "Amount: $" . $amount . "<br>";
echo "VAT (15%): $" . $vat . "<br>";
echo "Total Amount (including VAT): $" . $total . "<br>";



$number = 7;


if ($number % 2 == 0) {
    echo "<h3>Odd/Even Check</h3>";
    echo "The number is Even.";
} else {
    echo "<h3>Odd/Even Check</h3>";
    echo "The number is Odd.";
}


$num1 = 12;
$num2 = 25;
$num3 = 18;


if ($num1 >= $num2 && $num1 >= $num3) {
    $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest = $num2;
} else {
    $largest = $num3;
}

echo "<h3>Find Largest Number</h3>";
echo "Numbers: $num1, $num2, $num3 <br>";
echo "The largest number is: " . $largest;

echo "<h3>Odd Numbers between 10 and 100</h3>";


for ($i = 10; $i <= 100; $i++) {
   
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

$numbers = array(10, 20, 30, 40, 50, 60);

echo "<h3>Search Element in Array</h3>";
$search = 30;
$found = false;


for ($i = 0; $i < count($numbers); $i++) {
  if ($numbers[$i] == $search) {
    echo "The number " . $search . " was found at index " . $i . ".";
    $found = true;
    break;
  }
}

if ($found == false) {
  echo "The number " . $search . " was not found in the array.";
}

echo "<h3>Shapes with Nested Loops</h3>";


echo "<b>Star Triangle</b><br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";


echo "<b>Number Triangle</b><br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "<br>";


echo "<b>Alphabet Triangle</b><br>";
$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
echo "<h3>2D Array + Nested Loops</h3>";


$array = [
    [1, 2, 3, "A"],
    [1, 2, "B", "C"],
    [1, "D", "E", "F"]
];


echo "<b>Numbers from 2D Array</b><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>";


echo "<b>Alphabets from 2D Array</b><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 3 - $i; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}






?>

</body>
</html>