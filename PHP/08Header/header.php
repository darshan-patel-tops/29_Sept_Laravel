<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");

if (isset($_POST['header_redirection'])) {

    header("location:otherpage.php");
}
if (isset($_POST['header_download'])) {
    $size = filesize("Image.png");
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="Image.png"');
    header('Content-Length: ' . $size);
    readfile("Image.png");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Header</h2>

    <ul>
        <li>header() will helps to redirect, modified HTTP header, file download </li>
    </ul>

    <form method="post">
        <input type="submit" name="header_redirection" value="redirect to other page">
        <input type="submit" name="header_download" value="Download">
    </form>
</body>

</html>