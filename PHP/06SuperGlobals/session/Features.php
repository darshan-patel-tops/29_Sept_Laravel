<?php 
require('header.php');
require('header.php');
require('header1.php');
require('header.php');
 ?>
<div class="container">
    <div class="row">
        <div class="col">
            Features page data
            <p class="alert alert-info">require</p>
            <p>
Warning: require(header1.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\laravel\29Sept_laravel_TTS2\PHP\06SuperGlobals\session\Features.php on line 4

Fatal error: Uncaught Error: Failed opening required 'header1.php' (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\laravel\29Sept_laravel_TTS2\PHP\06SuperGlobals\session\Features.php:4 Stack trace: #0 {main} thrown in C:\xampp\htdocs\laravel\29Sept_laravel_TTS2\PHP\06SuperGlobals\session\Features.php on line 4</p>
        </div>
    </div>
</div>