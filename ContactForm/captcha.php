<?php
// Khoi tao session & chuoi rong $string
session_start();
$string = '';

// Tao gia tri random cho $string
for ($i = 0; $i < 5; $i++) {
	$string .= chr(rand(97, 122));
}
$_SESSION['random_code'] = $string;

// Storage folder & colors
$fontDir = 'fonts/';
$image = imagecreatetruecolor(170, 60);
$black = imagecolorallocate($image, 0, 0, 0);
$color = imagecolorallocate($image, 200, 100, 90);
$white = imagecolorallocate($image, 255, 255, 255);

// Tao anh
imagefilledrectangle($image, 0, 0, 200, 200, $white);
imagettftext($image, 30, 0, 10, 40, $color, $fontDir."LHANDW.TTF", $_SESSION['random_code']);

// Image Final

header("Content-type: image/png");
imagepng($image);
?>