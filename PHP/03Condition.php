<?php

$marks = 90;
// if ($marks > 50) {
// if ($marks == 50) {
// if ($marks === 50) {
//     echo "Pass";
// }

// if ($marks >= 50) {
//     echo "Pass";
// }else{
//     echo "Try again";
// }
// if ($marks >= 0 || $marks <= 100) {
if ($marks >= 0 && $marks <= 100) {
    if ($marks >= 50 && $marks < 60) {
        echo "Pass Class";
    }else if ($marks >= 60 && $marks < 70) {
        echo "First Class";
    }else if ($marks >= 70 && $marks < 80) {
        echo "Disti Class";
    }else if ($marks >= 80 && $marks < 90) {
        echo "Disti+ Class";
    }else if ($marks >= 90 && $marks <= 100) {
        echo "More then enogh";
    }else{
        echo "Try again";
    }
}else{
    echo "Invalid Marks";
}


$lang = "Guj";
switch ($lang) {
    case 'Eng':
        echo "Thank you For Connecting With us ";
        break;
    case 'Guj':
        echo "Sampark Badal AAbhar";
        break;
    case 'Hin':
        echo "Sampark ke liye dhanyavad";
        break;
    
    default:
        # code...
        break;
}

?>