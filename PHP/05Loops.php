<?php

for ($i=0; $i < 10; $i++) { 
    echo $i."<br>";
}



$variable = ["Test",'D',123,123.12,true];
// foreach is use for access array elements
foreach ($variable as $key => $value) {
    echo "Key is $key and value is $value<br>"; 
    // echo 'Key is $key and value is $value<br>'; 
}

$a =0;
while ($a <= 10) {
    echo $a."<br>";
    $a++;
}



// Exit control loop
$dowhile = 50;
do {
    echo "$dowhile ";
} while ($dowhile <= 10);

echo " <br> ";

for ($i=0; $i <10 ; $i++) {
    for ($j=0; $j <=$i ; $j++) {
        // echo " * ";
        echo " $j ";
    }
    echo " <br> ";
}
?>