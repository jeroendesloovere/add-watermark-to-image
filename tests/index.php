<?php
header('content-type: image/jpeg');
// this script creates a watermarked image from an image file - can be a .jpg .gif or .png file

  
$imagesource = 'home_foto.jpg';
$watermark = imagecreatefromjpeg('watermerk/logo-kensington.jpg');  
$watermark_width = imagesx($watermark);  
$watermark_height = imagesy($watermark);  
$image = imagecreatetruecolor($watermark_width, $watermark_height);  
$image = imagecreatefromjpeg($imagesource);  
$size = getimagesize($imagesource);  
$dest_x = 5; // rechts : $dest_x = $size[0] - $watermark_width - 5; 
$dest_y = $size[1] - $watermark_height - 5; 
imagecopymerge($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, 100);  
// save file and give it a new name
imagejpeg($image);  
imagedestroy($image);  
imagedestroy($watermark);  
?> 