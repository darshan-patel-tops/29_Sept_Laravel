<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>

<body>
    <form method="post">
        <input type="file" id="sortpicture">
        <!-- <input type="submit" name="" id="upload"> -->
        <input type="button" value="Upload" name="" id="upload">
        <img src="" id="preview" height="100px" width="100px" alt="no image">
    </form>
    <script>
        $('#upload').on('click', function() {
            var file_data = $('#sortpicture').prop('files')[0];
            var form_data = new FormData();
            form_data.append('profile_pic', file_data);
            // alert(form_data);
            console.log(form_data);
            $.ajax({
                url: 'upload.php', // <-- point to server-side PHP script 
                dataType: 'text', // <-- what to expect back from the PHP script, if anything
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(php_script_response) {
                    alert(php_script_response); // <-- display response from the PHP script, if any
                    $('#preview').attr('src', "uploads/"+php_script_response);
                }
            });
        });
    </script>
</body>

</html>