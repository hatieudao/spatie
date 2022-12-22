<?php
require 'vendor/autoload.php';
use Spatie\Browsershot\Browsershot;

$url = readline('Enter url: ');
$image_name = readline('Enter image name: ');
$file_extension = readline('Enter file extension: ');
Browsershot::url($url)->save('images/'. $image_name . '.' . $file_extension);

echo "Image saved to images/$image_name.$file_extension";
?>
