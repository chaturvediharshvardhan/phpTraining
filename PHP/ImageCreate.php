<?php 
  
// Create the size of image or blank image 
$image = imagecreate(500, 300); 
  
// Set the background color of image 
$backgroundColor = imagecolorallocate($image, 153, 153, 153); 
  
// Set the text color of image 
$textColor = imagecolorallocate($image, 255, 255, 255); 
  
// Function to create image which contains string. 
imagestring($image, 5, 180, 100,  "GeeksforGeeks", $textColor); 
imagestring($image, 3, 160, 120,  "A computer science portal", $textColor); 
  
header("Content-Type: image/png"); 
  
imagepng($image); 
imagedestroy($image); 

  
?>