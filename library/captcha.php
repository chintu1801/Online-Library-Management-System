<?php 
/*session_start(); 
$text = rand(10000,99999); 
$_SESSION["vercode"] = $text; 
$height = 25; 
$width = 65;   
$image_p = imagecreate($width, $height); 
$black = imagecolorallocate($image_p, 0, 0, 0); 
$white = imagecolorallocate($image_p, 255, 255, 255); 
$font_size = 14; 
imagestring($image_p, $font_size, 5, 5, $text, $white); 
imagejpeg($image_p, null, 80); 
*/
session_start(); 
$text = rand(10000,99999); 
$_SESSION["vercode"] = $text; 
$layer = imagecreate(65, 25); 
$captcha_bg = imagecolorallocate($layer, 250, 160, 120); 
imagefill($layer,0,0,$captcha_bg);
$captcha_text_color=imagecolorallocate($layer,0,0,0);
$font_size = 14; 
imagestring($layer, $font_size, 5, 5, $text, $captcha_text_color); 
header('Content-Type:image/jpeg');
imagejpeg($layer);
?>