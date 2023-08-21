<?php

// array_fill("a","b","test");
$NewArray = array_fill(4,4,"test");
echo "<pre>";
print_r($NewArray);

$arr = ["TOPS","SG"];
$new1=array_pad($arr,4,"blue");
print_r($new1);
?>