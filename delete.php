<?php
$file= $_POST['name'];

// simple sanitizer https://stackoverflow.com/questions/2021624/string-sanitizer-for-filename
$file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $file);
// Remove any runs of periods (thanks falstro!)
$file = mb_ereg_replace("([\.]{2,})", '', $file);
echo $file;
unlink("uploads/$file"); 
?>