<?php
// echo "<pre>";
// print_r($_FILES);

$target_file = "uploads/".basename($_FILES["profile_pic"]["name"]);
// move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$allowedTypes = ['jpg', 'png'];

if (!in_array($imageFileType, $allowedTypes)) {
    $msg = "Type is not allowed";
} // Check if file already exists
// elseif (file_exists($target_file)) {
//     $msg = "Sorry, file already exists.";
// } // Check file size
elseif ($_FILES["profile_pic"]["size"] > 5000000) {
    $msg = "Sorry, your file is too large.";
} elseif (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
    // $msg = "The file " . basename($_FILES["profile_pic"]["name"]) . " has been uploaded.";
    $msg = $_FILES["profile_pic"]["name"];
}
echo  $msg;
?>