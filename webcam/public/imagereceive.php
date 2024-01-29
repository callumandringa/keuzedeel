<?php







// Check if the image file exists
$imagePath = "../uploads/foto.png";



if (file_exists($imagePath)) {
    
header('Content-Type: image/png');
header('Content-Length: '.filesize($imagePath));
$fp = fopen($imagePath,'rb');
fpassthru($fp);


    exit; // Ensure that no further output is sent
} else {
    echo "Image not found";
}
?>

 




