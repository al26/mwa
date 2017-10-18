<?php 
$a = "assets/uploaded_files/attachments/181017-amien.jpg";
echo number_format(filesize($a) / 1048576, 2) . ' MB';
?>
