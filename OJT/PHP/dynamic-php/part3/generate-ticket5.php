<?php
// Generate a random ticket number
$ticketNumber = rand(1000, 9999);

// Create a ticket-like image
$image = imagecreate(300, 80);
imagecolorallocate($image, 255, 215, 0);
$textColor = imagecolorallocate($image, 255, 255, 255);
imagettftext($image, 20, 0, 55, 55, $textColor, 'Poppins-Black.ttf', "Ticket #$ticketNumber");
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>
