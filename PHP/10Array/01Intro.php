<?php

$Maths =50;
$Eng =80;
$Comp =90;

// 1) Index array [key numeric only]
$arr = array("50",80,90.00,"test","data",'a',true);

// echo ""
// echo $arr; // Warning: Array to string conversion in C:\xampp\htdocs\laravel\29Sept_laravel_TTS2\PHP\10Array\01Intro.php on line 10

// echo $arr[0];
// echo count($arr);

// for ($i=0; $i < count($arr); $i++) { 
// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i]."<br>";
// }
foreach ($arr as $key => $value) {
    echo "$key => $value <br>";
}


// Associative array key can be hold numeric + alpha numeric val user definded
$AssocArr = ["Maths"=>90,"Eng"=>95,"Comp"=>99];
echo "<pre>";
print_r($AssocArr);
// for ($i=0; $i < ; $i++) { 
//     # code...
// }
foreach ($AssocArr as $key => $value) {
    echo "$key => $value <br>";
}


// multi-diamension

$MultiArray = array("SchuoolName"=>array("10th"=>array("Stud1"=>array("Maths"=>90,"Comp"=>95,"Eng"=>100),"Stud2"=>array("Maths"=>88,"Comp"=>85,"Eng"=>80),
"Stud3"=>array("Maths"=>65,"Comp"=>100,"Eng"=>100)),"11th"=>array("Stud11_1"=>array("Maths"=>90,"Comp"=>95,"Eng"=>100),"Stud11_2"=>array("Maths"=>88,"Comp"=>85,"Eng"=>80),
"Stud3"=>array("Maths"=>65,"Comp"=>100,"Eng"=>100))));
print_r($MultiArray);
// print_r($MultiArray['SchuoolName']['10th']['Stud2']['Maths']);
echo "Studendt 2 get  ".$MultiArray['SchuoolName']['10th']['Stud2']['Maths']." Marks in Maths";

$op = array("Testing",564=>"Data",true,"A");
$op = array("Testing","data"=>"Data","data"=>"AbC",true,"A");
print_r($op);
// var_dump($op);
// var_export($op);
?>

<p>array = store multiple data in to single variable</p>
<ul>
    <li>numeric/index array</li>
    <li>associative array</li>
    <li>multipdiamension array</li>
</ul>
