<?php
echo "Using (For Loop)<br> ";

for ($i = 5; $i <= 15; $i++) {
    echo $i . "<br>";
}


echo "Using (While Loop)<br>";

$i = 5;
while ($i <= 15) {
    echo $i . "<br>";
    $i++;
}

echo "Using (Do...While Loop)<br>";

$i = 5;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 15);


?>
