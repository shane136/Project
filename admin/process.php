<!-- signature-upload -->
<?php
  
  $folderPath = "../assets/image/";
  $image_parts = explode(";base64,", $_POST['signature']); 
  $image_type_aux = explode("image/", $image_parts[0]);
  $image_type = $image_type_aux[1];
  $image_base64 = base64_decode($image_parts[1]);
  $file = $folderPath . uniqid("sig_") . '.'.$image_type;
  file_put_contents($file, $image_base64);
  echo '<script> alert("Signature Uploaded Successfully!")</script>';
  echo "<script> window.location.href='../admin/sign.php';</script>";
  
?>